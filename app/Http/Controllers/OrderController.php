<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $start = $request->input('start_date') . ' ' . $request->input('start_time');
        $end = $request->input('end_date') . ' ' . $request->input('end_time');
        Order::create([
            'name_user' => $request->input('name'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'start' => $start,
            'end' => $end,
            'id_car' => $request->input('id_car'),
            'id_user' => $request->input('id_user'),
        ]);
    }

    public function my_orders(Request $request){
       return OrderResource::collection(Order::where('id_user', $request->input('id_user'))->get()); 
    }

    public function cancel_order($id){
        Order::where('id',$id)->delete();
    }

    public function all_orders(){
        return OrderResource::collection(Order::where('status', 'Ожидание')->get());
    }

    public function accept($id){
        Order::where('id', $id)->update([
            'status' => 'Одобрено'
        ]);
    }
    public function cancel($id){
        Order::where('id', $id)->update([
            'status' => 'Отказано'
        ]);
    }
}
