<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call(AbonnesTableSeeder::class);
        $this->call(EvalutionsTableSeeder::class);
        $this->call(MoniteursTableSeeder::class);
        $this->call(ActivitesTableSeeder::class);
        $this->call(SeancesTableSeeder::class);
        $this->call(ValidationsTableSeeder::class);
    }
}
