<?php

use Illuminate\Database\Seeder;

class MoniteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Moniteur::class, 30)->create();
    }
}
