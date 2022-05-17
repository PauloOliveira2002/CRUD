<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Player::class,50)->create();
    }
}
