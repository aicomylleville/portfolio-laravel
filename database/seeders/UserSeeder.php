<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aico Mylleville',
            'email' => 'aico.mylleville1998@gmail.com',
            'type' => 'admin',
            'password' => bcrypt('Xs?4xXG?e!y@d!TPD#m5')
        ]);
    }
}
