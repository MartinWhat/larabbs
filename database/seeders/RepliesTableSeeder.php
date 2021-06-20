<?php

namespace Database\Seeders;

use App\Http\Requests\UserRequest;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Reply;

class RepliesTableSeeder extends Seeder
{
    public function run()
    {
        Reply::factory()->count(10)->create();
        //$user_ids = User::all()->pluck('id')->toArray();
        //$topic = Topic::all()->pluck('id')->toArray();

    }
}

