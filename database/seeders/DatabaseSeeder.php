<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Car::create([
            'name' => 'Mazda RX-8',
            'horse_power' => '112 л.с.',
            'class_auto' => 'Спорт',
            'transmission' => 'АКПП',
            'conditioner' => 'Да',
            'drive' => 'Задний',
            'type_fuel' => 'Бензин',
            'consumption' => '8 л/100 км',
            'color' => 'Синий',
            'audio' => 'Radio, USB',
            'year' => '2023',
            'price' => '10к',
            'img' => 'img/pngegg (2) 1.png'
        ]);

        \App\Models\Car::create([
            'name' => 'Mitsubishi lancer 10',
            'horse_power' => '150 л.с.',
            'class_auto' => 'Комфорт',
            'transmission' => 'МКПП',
            'conditioner' => 'Да',
            'drive' => 'Передний',
            'type_fuel' => 'Бензин',
            'consumption' => '8 л/100 км',
            'color' => 'Красный',
            'audio' => 'Radio, USB',
            'year' => '2014',
            'price' => '12к',
            'img' => 'img/pngegg (1) 1.png'
        ]);

        \App\Models\Car::create([
            'name' => 'Kia Ceed',
            'horse_power' => '112 л.с.',
            'class_auto' => 'Комфорт',
            'transmission' => 'AКПП',
            'conditioner' => 'Да',
            'drive' => 'Передний',
            'type_fuel' => 'Бензин',
            'consumption' => '8 л/100 км',
            'color' => 'Белый',
            'audio' => 'Radio, USB',
            'year' => '2016',
            'price' => '12к',
            'img' => 'img/pngegg 1.png'
        ]);

        \App\Models\Car::create([
            'name' => 'Kia Rio',
            'horse_power' => '98 л.с.',
            'class_auto' => 'Эконом',
            'transmission' => 'МКПП',
            'conditioner' => 'Да',
            'drive' => 'Передний',
            'type_fuel' => 'Бензин',
            'consumption' => '7 л/100 км',
            'color' => 'Серый',
            'audio' => 'Radio, USB',
            'year' => '2006',
            'price' => '8к',
            'img' => 'img/pngegg (1).png'
        ]);

        \App\Models\Car::create([
            'name' => 'Honda Civic',
            'horse_power' => '112 л.с.',
            'class_auto' => 'Комфорт',
            'transmission' => 'АКПП',
            'conditioner' => 'Да',
            'drive' => 'Передний',
            'type_fuel' => 'Бензин',
            'consumption' => '8 л/100 км',
            'color' => 'Черный',
            'audio' => 'Radio, USB',
            'year' => '2015',
            'price' => '13к',
            'img' => 'img/pngegg (2).png'
        ]);

        \App\Models\Car::create([
            'name' => 'Toyota Rav4',
            'horse_power' => '140 л.с.',
            'class_auto' => 'Кроссовер',
            'transmission' => 'АКПП',
            'conditioner' => 'Да',
            'drive' => 'Полный',
            'type_fuel' => 'Бензин',
            'consumption' => '10 л/100 км',
            'color' => 'Белый',
            'audio' => 'Radio, USB',
            'year' => '2020',
            'price' => '18к',
            'img' => 'img/pngegg (3).png'
        ]);

        \App\Models\Car::create([
            'name' => 'Kia Sportage',
            'horse_power' => '145 л.с.',
            'class_auto' => 'Кроссовер',
            'transmission' => 'МКПП',
            'conditioner' => 'Да',
            'drive' => 'Передний',
            'type_fuel' => 'Бензин',
            'consumption' => '8 л/100 км',
            'color' => 'Серый',
            'audio' => 'Radio, USB',
            'year' => '2018',
            'price' => '17к',
            'img' => 'img/pngegg (4).png'
        ]);

        \App\Models\Car::create([
            'name' => 'Hundai Solaris',
            'horse_power' => '112 л.с.',
            'class_auto' => 'Комфорт',
            'transmission' => 'МКПП',
            'conditioner' => 'Да',
            'drive' => 'Передний',
            'type_fuel' => 'Бензин',
            'consumption' => '8 л/100 км',
            'color' => 'Белый',
            'audio' => 'Radio, USB',
            'year' => '2014',
            'price' => '10к',
            'img' => 'img/pngegg (5).png'
        ]);

        \App\Models\Car::create([
            'name' => 'Nissan GTR R35',
            'horse_power' => '500 л.с.',
            'class_auto' => 'Спорт',
            'transmission' => 'АКПП',
            'conditioner' => 'Да',
            'drive' => 'Полный',
            'type_fuel' => 'Бензин',
            'consumption' => '20 л/100 км',
            'color' => 'оранжевый',
            'audio' => 'Radio, USB',
            'year' => '2019',
            'price' => '55к',
            'img' => 'img/pngegg.png'
        ]);
    }
}



