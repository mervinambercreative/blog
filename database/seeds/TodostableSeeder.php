<?php

use Illuminate\Database\Seeder;

class TodostableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Todo::class, 7)->create();
    }
}
