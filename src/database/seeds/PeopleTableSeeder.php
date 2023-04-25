<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => 'YAMADA-TARO',
            'mail' => 'taro@yamada',
            'age' => 34,
        ]);

        DB::table('people')->insert([
            'name' => 'HANAKO',
            'mail' => 'hanako@flower',
            'age' => 19,
        ]);

        DB::table('people')->insert([
            'name' => 'JIRO',
            'mail' => 'jiro@mail.jp',
            'age' => 47,
        ]);

        DB::table('people')->insert([
            'name' => 'ICHIRO',
            'mail' => 'ichiro@mail.jp',
            'age' => 17,
        ]);

        DB::table('people')->insert([
            'name' => 'TOMOKO',
            'mail' => 'tomoko@mail.jp',
            'age' => 30,
        ]);
    }

}
