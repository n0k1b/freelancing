<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('blog_categories')->insert(['name'=>'Health','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Fashion and beauty','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Travel','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Abuse','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Craft','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Career and education','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Cooking and recipes','image'=>'1604669778.jpg']);
        DB::table('blog_categories')->insert(['name'=>'Parenting and babycare','image'=>'1604669778.jpg']);

        DB::table('gig_categories')->insert(['name'=>'Makeup artist','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Graphic and design','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Photography','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Food','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Handcraft','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Clothing','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Accessories','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Programming and tech','image'=>'1604669778.jpg']);
        DB::table('gig_categories')->insert(['name'=>'Video and animation','image'=>'1604669778.jpg']);

        // $array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        // $category = [1,2,3,4,5,6,7,8];

        // for ($i=0; $i < count($array); $i++) {
        //     DB::table('users')->insert([
        //         'name' => Str::random(5),
        //         'email' => Str::random(5).'@gmail.com',
        //         'mobile' => '018'.rand(),
        //         'address' => Str::random(15),
        //         'district' => Str::random(5),
        //         'nid' => rand(),
        //         'role' => 'user',
        //         'status' => 1,
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('password')
        //     ]);
        // }

        // for ($i=0; $i < count($array); $i++) {
        //     $cat_id = $i>7?1:$category[$i];
        //     DB::table('blog_posts')->insert([
        //         'user_id'=>$i+1,
        //         'category_id'=>$cat_id,
        //         'post'=>Str::random(50),
        //         'image'=>'1604510902.jpeg'
        //     ]);
        // }
    }
}
