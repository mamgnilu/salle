<?php

use Illuminate\Database\Seeder;

class AbonnesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Abonne::class, 30)->create();
    }
}
