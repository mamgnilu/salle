<?php

use Illuminate\Database\Seeder;

class EvalutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Evalution::class, 30)->create();
    }
}
