<?php

use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments = [
            [
                'user_id' => '1',
                'service_id' => 1,
                'start' => '2020-05-18 08:30:00',
                'end' => '2020-05-18 09:00:00'
            ],
            [
                'user_id' => '1',
                'service_id' => 2,
                'start' => '2020-05-18 09:30:00',
                'end' => '2020-05-28 '
            ],
            [
                'user_id' => '1',
                'service_id' => 3,
                'start' => '2020-05-18',
                'end' => '2020-05-28'
            ],
            [
                'user_id' => '1',
                'service_id' => 4,
                'start' => '2020-05-18',
                'end' => '2020-05-28'
            ],
            [
                'user_id' => '1',
                'service_id' => 5,
                'start' => '2020-05-18',
                'end' => '2020-05-28'
            ]
        ];

        foreach ($appointments as $appointment) {
            Appointment::create(array(
                'user_id' => $appointment['user_id'],
                'service_id' => $appointment['service_id'],
                'start' => $appointment['start'],
                'end' => $appointment['end']
            ));
        }
    }
}
