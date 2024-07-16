<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\MandatorySaving;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Alex',
            'email' => 'alexa@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        User::create([
            'name' => 'Beta',
            'email' => 'beta@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Customer::create([
            'code' => 'RA01',
            'name' => 'Alex',
            'gender' => 'Laki-Laki',
            'phone' => '085797563983',
            'address' => 'Bandung',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Customer::create([
            'code' => 'RA02',
            'name' => 'Beta',
            'gender' => 'Laki-Laki',
            'phone' => '085797565965',
            'address' => 'Bandung',
            'user_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        MandatorySaving::create([
            'customer_id' => '1',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '1',
            'date' => now()->toDateString(),
            'amount' => intval('10000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '1',
            'date' => now()->toDateString(),
            'amount' => intval('10000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '1',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '1',
            'date' => now()->toDateString(),
            'amount' => intval('10000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '1',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '2',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '2',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '2',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '2',
            'date' => now()->toDateString(),
            'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        MandatorySaving::create([
            'customer_id' => '2',
            'date' => now()->toDateString(),
            'amount' => intval('1000000'), // Mengonversi '100000' menjadi bilangan bulat
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // MySaving::create([
        //     'customer_id' => '1',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '1',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '1',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '1',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '1',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '2',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '2',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '2',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '2',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '2',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // MySaving::create([
        //     'customer_id' => '2',
        //     'date' => now()->toDateString(),
        //     'amount' => intval('100000'), // Mengonversi '100000' menjadi bilangan bulat
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
