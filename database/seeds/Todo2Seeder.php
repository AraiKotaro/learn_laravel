<?php

use Illuminate\Database\Seeder;

class Todo2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Todo2::class, 50)->create();
    }
}
