<?php

namespace App\Http\Resources;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'id_car' => Car::where('id', $this->id_car)->get(),
            'status' => $this->status,
            'id_user' => User::where('id', $this->id_user)->get(),
            'start' => $this->start,
            'end' => $this->end,
        ];
    }
}
