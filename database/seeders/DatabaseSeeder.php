<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('blog_categories')->insert(['name'=>'Health']);
        DB::table('blog_categories')->insert(['name'=>'Fashion and beauty']);
        DB::table('blog_categories')->insert(['name'=>'Travel']);
        DB::table('blog_categories')->insert(['name'=>'Abuse']);
        DB::table('blog_categories')->insert(['name'=>'Craft']);
        DB::table('blog_categories')->insert(['name'=>'Career and education']);
        DB::table('blog_categories')->insert(['name'=>'Cooking and recipes']);
        DB::table('blog_categories')->insert(['name'=>'Parenting and babycare']);
    }
}
