<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'CodeLean',
                'email' => 'codelean@gmail.com',
                'phone' => '0123456789',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0223456789',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'shanelynch@gmail.com',
                'phone' => '0323456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.jpg',
                'level' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'brandonkelley@gmail.com',
                'phone' => '0423456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.jpg',
                'level' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'roybanks@gmail.com',
                'phone' => '0523456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.jpg',
                'level' => 1,
            ],
        ]);

        DB::table('blogs')->insert([

            [
                'user_id' => 3,
                'blog_category_id' => 1,
                'title' => '6 ways to prepare breakfast for 30',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-1.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 2,
                'title' => 'You can keep fit at university',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-2.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 3,
                'title' => '6 reasons to get rebounding',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-3.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 4,
                'title' => 'Cooking tips make cooking simple',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-4.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 1,
                'title' => 'Optimise your muscle gains',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-5.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 2,
                'title' => 'Cooking tips make cooking simple',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-6.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 3,
                'title' => '09 Kinds Of Vegetables Protect The Liver',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'healthy-4.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 4,
                'title' => 'Tips You To Balance Nutrition Meal Day',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'healthy-2.jpg',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 1,
                'title' => '4 Principles Help You Lose Weight With Vegetables',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'healthy-3.jpg',
                'content' => '',
            ],
        ]);


        DB::table('product_categories')->insert([
            [
                'name' => 'CLASSES',
            ],
            [
                'name' => 'PRICING',
            ],
        ]);
//
        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 1,
                'name' => 'Yoga for beginners',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for beginners',
                'study_date'=> ' 7 Days ',
                'study_time' => 'Start on 01th Every Month',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 2,
                'product_category_id' => 1,
                'name' => 'Yoga for young people',
                'teacher_name' => 'Edna Almira',
                'level'=>'Yoga for Seniors',
                'study_date'=> ' 14 Days  ',
                'study_time' => ' Start on 15th Every Month',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',

            ],
            [
                'id' => 3,
                'product_category_id' => 1,
                'name' => '30 Days of Yoga for Men',
                'teacher_name' => 'Silas Dominic',
                'level'=>'Yoga for beginners',
                'study_date'=> ' 30 Days  ',
                'study_time' => ' Start on 01th Every Month',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 4,
                'product_category_id' => 1,
                'name' => 'Yoga helps kids stay active, learn patience.',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for kids',
                'study_date'=> ' Tue, Thu, Sat ',
                'study_time' => ' 6:30 - 7:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 5,
                'product_category_id' => 1,
                'name' => '100 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Jordan Lawson',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri  ',
                'study_time' => ' 18:30 - 19:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 6,
                'product_category_id' => 1,
                'name' => '200 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Jordan Lawson',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => ' 18:30 - 19:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 7,
                'product_category_id' => 1,
                'name' => '300 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Jordan Lawson',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => ' 18:30 - 19:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 8,
                'product_category_id' => 1,
                'name' => 'How to Practice Nature-Based Spirituality',
                'teacher_name' => 'Silas Dominic',
                'level'=>'Yoga for Seniors',
                'study_date'=> ' Tue, Thu, Sat  ',
                'study_time' => ' 17:30 - 18:30 ',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 9,
                'product_category_id' => 1,
                'name' => 'Yoga for Seniors, the Elderly, and Older Adults.',
                'teacher_name' => 'Silas Dominic',
                'level'=>'Yoga for Seniors',
                'study_date'=> ' Mon, Wed, Fri  ',
                'study_time' => ' 6:30 - 7:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],

            [
                'id' => 10,
                'product_category_id' => 2,
                'name' => 'Yoga for beginners',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for beginners',
                'study_date'=> ' 7 Days ',
                'study_time' => 'Start on 01th Every Month',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 11,
                'product_category_id' => 2,
                'name' => 'Yoga for young people',
                'teacher_name' => 'Edna Almira',
                'level'=>'Yoga for Seniors',
                'study_date'=> ' 14 Days  ',
                'study_time' => ' Start on 15th Every Month',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',

            ],
            [
                'id' => 12,
                'product_category_id' => 2,
                'name' => '30 Days of Yoga for Men',
                'teacher_name' => 'Silas Dominic',
                'level'=>'Yoga for beginners',
                'study_date'=> ' 30 Days  ',
                'study_time' => ' Start on 01th Every Month',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 13,
                'product_category_id' => 2,
                'name' => 'Yoga helps kids stay active.',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for kids',
                'study_date'=> ' Tue, Thu, Sat ',
                'study_time' => ' 6:30 - 7:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 14,
                'product_category_id' => 2,
                'name' => '100 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Jordan Lawson',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri  ',
                'study_time' => ' 18:30 - 19:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 15,
                'product_category_id' => 2,
                'name' => '200 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Jordan Lawson',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => ' 18:30 - 19:30',
                'content' => '',
                'price' => null,
                'discount' => null,
                'featured' => true,
                'tag' => 'Yoga',
            ],
        ]);

        DB::table('blog_comments')->insert([
            [
                'blog_id' => 1,
                'user_id' => 4,
                'email' => 'brandonkelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'blog_id' => 1,
                'user_id' => 5,
                'email' => 'roybanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'yoga1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'yoga4.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'yoga16.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'yoga12.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'yoga17.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'yoga17.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'yoga17.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'yoga19.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'yoga24.jpg',
            ],
        ]);
        DB::table('blog_categories')->insert([
            [
                'name' => 'Fuel',
            ],
            [
                'name'=> 'Sweat',
            ],
            [
                'name' => 'Play',
            ],
            [
                'name' => 'Live',
            ],
        ]);

    }
}
