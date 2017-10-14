<?php

use Illuminate\Database\Seeder;

class SpecialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specials')->insert([ 'name' =>'Trouble de comportement', ]);
        DB::table('specials')->insert([ 'name' =>'Difficultés d\'apprentissage', ]);
        DB::table('specials')->insert([ 'name' =>'Milieu familial dysfonctionnel', ]);
        DB::table('specials')->insert([ 'name' =>'Allergies', ]);
        DB::table('specials')->insert([ 'name' =>'Maladie', ]);
    }
}
