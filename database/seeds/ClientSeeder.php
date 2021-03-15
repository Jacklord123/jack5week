<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Bobong',
                'address' => 'Sikatuna',
                'phone' => '21315232342',
                'capitalization' => 24002320,
                'loan' => 112321000
            ],
            [
                'name' => 'Tekyang',
                'address' => 'Wakwak',
                'phone' => '090964391223',
                'capitalization' => 45124321000,
                'loan' => 310123124000
            ],
            [
                'name' => 'Kanor',
                'address' => 'SityoTugas',
                'phone' => '09092626010',
                'capitalization' => 5890920,
                'loan' => 5928213
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
