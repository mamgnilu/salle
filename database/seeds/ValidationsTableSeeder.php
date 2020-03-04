<?php

use Illuminate\Database\Seeder;

class ValidationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Validation::class, 30)->create();
    }
}
