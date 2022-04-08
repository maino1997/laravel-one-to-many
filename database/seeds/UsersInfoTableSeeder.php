<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\UserInfo;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;



class UsersInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 4; $i++) {
            $user_info = new UserInfo();

            $user_info->name = $faker->text(10);
            $user_info->surname = $faker->text(10);
            $user_info->email = $faker->email(10);


            $user_info->save();
        }
    }
}
