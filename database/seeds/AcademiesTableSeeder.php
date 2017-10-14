<?php

use Illuminate\Database\Seeder;

class AcademiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('academies')->insert([ 'name' =>'Français lecture : Retard', ]);
        DB::table('academies')->insert([ 'name' =>'Français lecture : Faible', ]);
        DB::table('academies')->insert([ 'name' =>'Français lecture : Moyen', ]);
        DB::table('academies')->insert([ 'name' =>'Français lecture : Fort', ]);
        DB::table('academies')->insert([ 'name' =>'Français écriture : Retard', ]);
        DB::table('academies')->insert([ 'name' =>'Français écriture : Faible', ]);
        DB::table('academies')->insert([ 'name' =>'Français écriture : Moyen', ]);
        DB::table('academies')->insert([ 'name' =>'Français écriture : Fort', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique concept : Retard', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique concept : Faible', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique concept : Moyen', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique concept : Fort', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique résoudre : Retard', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique résoudre : Faible', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique résoudre : Moyen', ]);
        DB::table('academies')->insert([ 'name' =>'Mathématique résoudre : Fort', ]);
    }
}
