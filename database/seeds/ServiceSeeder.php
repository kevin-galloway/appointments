<?php

use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'business_id' => 1,
                'type' => 'Teeth Cleaning',
                'price' => 150.00,
            ],
            [
                'business_id' => 1,
                'type' => 'Teeth Whitening',
                'price' => 150.00,
            ],
            [
                'business_id' => 2,
                'type' => 'Single Adjustment',
                'price' => 100.00,
            ],
            [
                'business_id' => 2,
                'type' => 'Physical Therapy',
                'price' => 140.00,
            ],
            [
                'business_id' => 2,
                'type' => 'Initial Consult',
                'price' => 60.00,
            ],
            [
                'business_id' => 3,
                'type' => 'Haircut',
                'price' => 20.00,
            ],
            [
                'business_id' => 3,
                'type' => 'Haircut + Face Shave',
                'price' => 25.00,
            ],
            [
                'business_id' => 3,
                'type' => 'Haircut + Wash',
                'price' => 35.00,
            ]
        ];

        foreach ($services as $service) {
            Service::create(array(
                'business_id' => $service['business_id'],
                'type' => $service['type'],
                'price' => $service['price']
            ));
        }
    }
}
