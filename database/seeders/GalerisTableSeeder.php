<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalerisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galeris')->delete();
        
        \DB::table('galeris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'koching',
                'img' => 'Dema_uninus_koching_1702542434.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-12-14 08:27:15',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kantor Depan PCNU',
                'img' => 'Dema_uninus_Kantor Depan PCNU_1702542466.jpg',
                'created_at' => '2023-12-14 08:27:47',
                'updated_at' => '2023-12-14 08:27:47',
            ),
        ));
        
        
    }
}