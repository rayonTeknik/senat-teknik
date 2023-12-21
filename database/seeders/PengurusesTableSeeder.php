<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengurusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penguruses')->delete();
        
        \DB::table('penguruses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rika Damayanti',
                'jabatan' => 'Div. Kominfo',
                'username_ig' => 'rifqi_munawar',
                'img' => 'pengurus_Rika Damayanti_1702541691.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-12-14 08:14:52',
            ),
        ));
        
        
    }
}