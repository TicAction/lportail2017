<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        'name' =>'Orthopédagogie',

    ]);
        DB::table('services')->insert([
            'name' =>'Psychologie',

        ]);
        DB::table('services')->insert([
            'name' =>'Éducation spécialisée',

        ]);
        DB::table('services')->insert([
            'name' =>'Orthophonie',

        ]);
        DB::table('services')->insert([
            'name' =>'Plan d\'intervention',

        ]);
        DB::table('services')->insert([
            'name' =>'Feuille de route',

        ]);DB::table('services')->insert([
        'name' =>'Suivi médical',

    ]);
        DB::table('services')->insert([
            'name' =>'Suivi en travail social',

        ]);
    }

}
