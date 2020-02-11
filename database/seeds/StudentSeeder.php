<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Student::create([
        	'nama' => 'Akmal',
        	'jk'	=> 'L'
        ]);

        App\Student::create([
        	'nama' => 'Intan',
        	'jk'	=> 'P'
        ]);

        App\Student::create([
            'nama' => 'Kamal',
            'jk'    => 'L'
        ]);

        App\Student::create([
            'nama' => 'Anya',
            'jk'    => 'P'
        ]);
    }
}
