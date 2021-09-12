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
                'avatar' => 'avatar-3.jpg',
                'level' => 0,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0223456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.jpg',
                'level' => 0,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'shanelynch@gmail.com',
                'phone' => '0323456789',
                'password' => Hash::make('123456'),
                'avatar' => null,
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
                'category' => 'Fuel',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 2,
                'title' => 'You can keep fit at university',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-2.jpg',
                'content' => '',
                'category' => 'Sweat',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 3,
                'title' => '6 reasons to get rebounding',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-3.jpg',
                'content' => '',
                'category' => 'Play',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 4,
                'title' => 'Cooking tips make cooking simple',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-4.jpg',
                'content' => '',
                'category' => 'Live',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 1,
                'title' => 'Optimise your muscle gains',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-5.jpg',
                'content' => '',
                'category' => 'Weight',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 2,
                'title' => 'Cooking tips make cooking simple',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-6.jpg',
                'content' => '',
                'category' => 'Beauty',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 3,
                'title' => '09 Kinds Of Vegetables Protect The Liver',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'healthy-4.jpg',
                'content' => '',
                'category' => 'Yoga Ball',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 4,
                'title' => 'Tips You To Balance Nutrition Meal Day',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'healthy-2.jpg',
                'content' => '',
                'category' => 'Fruit',
            ],
            [
                'user_id' => 3,
                'blog_category_id' => 1,
                'title' => '4 Principles Help You Lose Weight With Vegetables',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'healthy-3.jpg',
                'content' => '',
                'category' => 'Healthy Food',
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


        ]);

        DB::table('blog_comments')->insert([
            [
                'blog_id' => 1,
                'user_id' => 4,
                'email' => 'brandonkelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 5,
            ],
            [
                'blog_id' => 1,
                'user_id' => 5,
                'email' => 'roybanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 3,
            ],
            [
                'blog_id' => 1,
                'user_id' => 1,
                'email' => 'codelean@gmail.com',
                'name' => 'Beckham Anselm',
                'messages' => 'Good! I have improved a lot thanks to this lesson.',
                'rating' => 4,
            ],

        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'yoga1.jpg',
                'path_1' => 'yoga8.jpg',
                'path_2' => 'yoga2.jpg',
                'path_3' => 'yoga3.jpg',
                'path_4' => 'yoga14.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'yoga4.jpg',
                'path_1' => 'yoga11 .jpg',
                'path_2' => 'yoga12.jpg',
                'path_3' => 'yoga13.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 3,
                'path' => 'yoga16.jpg',
                'path_1' => 'yoga18.jpg',
                'path_2' => 'yoga19.jpg',
                'path_3' => 'yoga17.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 4,
                'path' => 'yoga23.jpg',
                'path_1' => 'yoga24.jpg',
                'path_2' => 'yoga25.jpg',
                'path_3' => 'yoga26.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 5,
                'path' => 'yoga17.jpg',
                'path_1' => '',
                'path_2' => '',
                'path_3' => '',
                'path_4' => '',
            ],
            [
                'product_id' => 6,
                'path' => 'yoga17.jpg',
                'path_1' => '',
                'path_2' => '',
                'path_3' => '',
                'path_4' => '',
            ],
            [
                'product_id' => 7,
                'path' => 'yoga17.jpg',
                'path_1' => '',
                'path_2' => '',
                'path_3' => '',
                'path_4' => '',
            ],
            [
                'product_id' => 8,
                'path' => 'yoga19.jpg',
                'path_1' => '',
                'path_2' => '',
                'path_3' => '',
                'path_4' => '',
            ],
            [
                'product_id' => 9,
                'path' => 'yoga24.jpg',
                'path_1' => 'yoga8.jpg',
                'path_2' => 'yoga2.jpg',
                'path_3' => 'yoga3.jpg',
                'path_4' => 'yoga14.jpg',
            ],
        ]);

        DB::table('blog_categories')->insert([
            [
                'name' => 'Fuel',
                'tags' => 'Weight',
            ],
            [
                'name'=> 'Sweat',
                'tags' => 'Beauty',
            ],
            [
                'name' => 'Play',
                'tags' => 'Yoga Ball',
            ],
            [
                'name' => 'Live',
                'tags' => 'Fruit',
            ],
            [
                'name' => '',
                'tags' => 'Healthy Food',
            ],
        ]);

        DB::table('product_detail')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'address'=>' 184 Main Collins Streets, New York',
                'teacher_name' => 'Tracy Maclaren',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '18:30 - 19:30',
                'content'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don’t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn’t is the anything aembarrassing hidden in the middle of text.Ipsum available but the that majority have that suffered is humour or randomised words.',
                'name' => '100 Hour Yoga Course Rishikesh',
                'title' => '',
                'avatar' => 'classes-instructor.png',
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'address'=>'  247 Cau Giay, Ha Noi',
                'teacher_name' => 'Kerenza Ladonna',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '8:00 - 10:00',
                'content'=>'My passion is to inspire others to start with Yoga. After practicing Yoga for a few years, I decided to switch to teaching yoga so that I could help others lead a happier, healthier lifestyle. I hope you will join me in this Yoga course where you will learn some great Yoga poses to get you started on this journey. Learn your yoga basic.
I will guide you through different Yoga poses with guided instruction so you know exactly how to do each pose. You will learn everything to start your Yoga practice. No experience necessary.',
                'name' => 'Yoga for beginners',
                'title' => '',
                'avatar' => 'avt1.jpg',
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'address'=>' 16 Dong Da, Ha Noi',
                'teacher_name' => ' Edna Almira',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '17:00 - 19:00',
                'content'=>'For young people, practicing yoga brings a lot of benefits from physical, mental to emotional. It is not natural that more and more yoga programs for children are being applied in schools. The useful tools of Yoga for young people are many such as: improving health and nerve activity; strengthen circulatory and respiratory functions; Adjust posture, increase height; improve digestion; help relieve stress; strengthens the immune system… Yoga also teaches children to get along with their main body and friends around a lot of activities that help them learn communication skills, have fun with friends, especially with the necessary postures and impacts. support. help and help and help each other.',
                'name' => 'Yoga for young people',
                'title' => '',
                'avatar' => 'avt2.jpg',
            ],
            [
                'id' => 4,
                'product_id' => 1,
                'address'=>'  24 Thanh Xuan, Ha Noi',
                'teacher_name' => ' Silas Dominic',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '18:30 - 19:30',
                'content'=>' In recent years, the number of men practicing yoga is increasing rapidly. Practicing yoga for men regularly not only helps strengthen health but also increases flexibility for the body.
If you think that yoga is too gentle, only women can practice, then immediately drop this thought. Yoga is a subject for everyone, even men who practice yoga are very good for health and increase masculinity.',
                'name' => '30 Days of Yoga for Men',
                'title' => '',
                'avatar' => 'avt3.jpg',
            ],
            [
                'id' => 5,
                'product_id' => 1,
                'address'=>'  24 Thanh Xuan, Ha Noi',
                'teacher_name' => ' Silas Dominic',
                'study_date'=> ' Mon, Tues, Wes',
                'study_time' => '17:00 - 19:00',
                'content'=>' Yoga has been known for centuries, and studies have proven that regular yoga practice can significantly improve your physical and mental health.
This article will equip you with the knowledge of yoga at home to be able to perform the movements with the correct technique.',
                'name' => 'Practicing Yoga at home',
                'title' => '',
                'avatar' => 'avt4.jpg',
            ],

        ]);
    }
}
