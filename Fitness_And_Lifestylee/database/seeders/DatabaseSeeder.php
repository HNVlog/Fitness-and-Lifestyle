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
                'avatar' => 'default-avatar.jpg',
                'level' => 0,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '0223456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-7.jpg',
                'level' => 0,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'shanelynch@gmail.com',
                'phone' => '0323456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.jpg',
                'level' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'brandonkelley@gmail.com',
                'phone' => '0423456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.jpg',
                'level' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'roybanks@gmail.com',
                'phone' => '0523456789',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-3.jpg',
                'level' => 1,
            ],
        ]);

        DB::table('blogs')->insert([

            [
                'id' => 1,
                'user_id' => 3,
                'blog_category_id' => 1,
                'title' => 'The body is not rigid, only the mind is rigid.',
                'subtitle' => 'Just practice Yoga and everything will come.',
                'image' => 'blog-1.jpg',
                'content' => 'Yoga is life, is philosophy. Anyone who wants to know about Yoga can practice Yoga.
                                Yoga is not owned by any individual or group of people. Anyone anywhere on this earth, of any caste,
                                any religion can practice Yoga.',
                'content_1'=>'This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more.',
                'content_2' => 'Yoga is a method of eliminating pain - pain that shapes the body, mind, and society.',
                'category' => 'Fuel',
                'image_1' => 'details/blogdetail1-1.jpg',
                'image_2' => 'details/blogdetail1-2.jpg',
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'blog_category_id' => 2,
                'title' => 'You can keep fit at university',
                'subtitle' => 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
                'image' => 'blog-2.jpg',
                'content' => 'Keeping fit during your university years may not be at the front of your mind, but by
                                maintaining a healthy body, you’re going to see some positive side effects spilling into
                                the rest of your uni life, from having better concentration to having more energy to
                                party.',
                'content_1'=>'Yoga is a method of eliminating pain - pain that shapes the body, mind, and society.',
                'content_2' => 'Regular practice of Yoga helps you to deal with all the stresses of life with consistency and firmness.',
                'category' => 'Sweat',
                'image_1' => 'details/blogdetail2-1.jpg',
                'image_2' => 'details/blogdetail2-2.jpg',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'blog_category_id' => 3,
                'title' => '6 reasons to get rebounding',
                'subtitle' => 'You may not be able to control the whole world out there, but you can learn to control your own spiritual world through yoga...',
                'image' => 'blog-3.jpg',
                'content' => 'Keeping fit during your university years may not be at the front of your mind, but by
                                maintaining a healthy body, you’re going to see some positive side effects spilling into
                                the rest of your uni life, from having better concentration to having more energy to
                                party.',
                'content_1'=>'In Yoga, 99% is practice and 1% is theory.',
                'content_2' => 'Yoga is the dance of every cell in the body, with music as the breath creating serenity and harmony within the soul.',
                'category' => 'Play',
                'image_1' => 'details/blogdetail3-1.jpg',
                'image_2' => 'details/blogdetail3-2.jpg',
            ],
            [
                'id' => 4,
                'user_id' => 3,
                'blog_category_id' => 4,
                'title' => '6 yoga moves to help her beautiful and glowing skin',
                'subtitle' => 'Practicing yoga helps the body to be flexible, practice deep and regular breathing.',
                'image' => 'blog-4.jpg',
                'content' => 'Practicing yoga not only helps your body to be flexible, but you also practice deep and
                                regular breathing, making it easier for the mood to return to a balanced state. To practice yoga most effectively,
                                of course you should join reputable classes. If you are too busy, you can do the following basic yoga
                                movements on your own every morning to start the day full of energy!',
                'content_1'=>'Yoga is the fountain of youth. You can only stay young forever when your bones are supple.',
                'content_2' => 'The spine is the root of the whole body. A healthy spine helps the organs in the body to
                                function smoothly. The Bow Pose will help activate the spinal nerves, making this "pillar" stronger and stronger.
                                At the same time, this movement also helps you strengthen the tone of the lower abs, open the chest,
                                open the shoulders and neck, stretch the thighs and arms.',
                'category' => 'Live',
                'image_1' => 'details/blogdetail4-1.jpg',
                'image_2' => 'details/blogdetail4-2.jpg',
            ],
            [
                'id' => 5,
                'user_id' => 3,
                'blog_category_id' => 5,
                'title' => 'Release your stress with yoga and static stretching',
                'subtitle' => 'Release tension in your body and mind with these simple yoga-inspired exercises.',
                'image' => 'blog-5.jpg',
                'content' => 'Yoga is known as a zen exercise for a reason. There are actually quite a few reasons why
                                yoga is helpful for relaxation and stress. Two of the main factors? Stretching your body helps relieve
                                physical tension, which many people also say helps them feel less mentally or emotional tense.
                                Secondly, an important part of yoga is connecting to your breathing and learning how to breathe deeper
                                and in sync with movement.',
                'content_1'=>'Yoga is the dance of every cell in the body, with music as the breath creating serenity and harmony within the soul.',
                'content_2' => 'Yoga instructor and certified health coach Meredith Wadsworth says that another reason
                                why yoga and stretching can help relieve stress is because you break the cycle of worrying or focusing
                                on what is going on in your life to focus on your body.',
                'category' => 'Weight',
                'image_1' => 'details/blogdetail5-1.jpg',
                'image_2' => 'details/blogdetail5-2.jpg',
            ],
            [
                'id' => 6,
                'user_id' => 3,
                'blog_category_id' => 6,
                'title' => '20 yoga poses for beginners you can do at home',
                'subtitle' => 'There are easy yoga poses that you can start with if you have never done yoga before.',
                'image' => 'blog-6.jpg',
                'content' => 'If you feel like starting yoga, just do it. Even from home, alone, with your mat.
                                You don not need more. “There is no good or bad time to start doing yoga,” experts tell us. Because you
                                    have limited space and yoga gives you many physical benefits. as well as mentally and emotionally".',
                'content_1'=>'Exercises are just a prose, while Yoga is poetry of movement. Once you understand the grammar of Yoga,
                                you will be able to write a poem of your own.',
                'content_2' => 'Once you have completed this circuit of 20 easy poses, you can gradually move on to other levels.
                                    Don not despair if you find that they don not suit you, that you don not have enough flexibility or
                                    that you lose your balance easily. In yoga, you never have to force. So do the best you can, relax
                                    yourself and don not pressurize.',
                'category' => 'Beauty',
                'image_1' => 'details/blogdetail6-1.jpg',
                'image_2' => 'details/blogdetail6-2.jpg',
            ],
            [
                'id' => 7,
                'user_id' => 3,
                'blog_category_id' => 7,
                'title' => 'Best recovery Foods for Vegetarian athletes',
                'subtitle' => '10+ Most Restorative and Nutritious Foods for Vegetarian Athletes',
                'image' => 'healthy-1.jpg',
                'content' => 'Did you know that what you eat after a workout for recovery is just as important as what
                                you eat before a workout for fuel? Believe it or not, eating the right types of recovery foods can actually help you grow stronger as an athlete.',
                'content_1'=>'Your post-run meal or snack replaces nutrients that were depleted during your workout
                                and supplies your muscles with the necessary building blocks to recover and get stronger.',
                'content_2' => 'Besides the physiological components of recovery, it’s also important to think about
                                hunger and appetite. If you don’t eat after a workout, you’ll probably feel very hungry later on in the day.
                                This can cause you to overeat foods that aren’t all the nutritious and don’t help with recovery.',
                'category' => 'Healthy Food',
                'image_1' => 'details/blogdetail7-1.jpg',
                'image_2' => 'details/blogdetail7-2.jpg',
            ],
            [
                'id' => 8,
                'user_id' => 3,
                'blog_category_id' => 8,
                'title' => 'Healthy and nutritious diet for yoga practitioners',
                'subtitle' => 'What is the best thing to eat before exercising for energy and endurance?',
                'image' => 'healthy-2.jpg',
                'content' => 'How a healthy diet and exercise can help you achieve your goals
                              The choices and lifestyle you make today will lead to a healthier future. Eating a healthy diet and exercising regularly can help control or delay health problems associated with aging, such as high blood pressure and diabetes.',
                'content_1'=>'Health in Yoga is earned by your sweat.',
                'content_2' => 'Remember that the length and intensity of your activity will determine how often and what
                                you should eat and drink. For example, you will need more energy from food to run a marathon than to walk
                                a few kilometers. Try not to include any new products in your diet before an extended sporting event.
                                It is best to have previous experience listening to your body process food.',
                'category' => 'Healthy Food',
                'image_1' => 'details/blogdetail8-1.jpg',
                'image_2' => 'details/blogdetail8-2.jpg',
            ],
            [
                'id' => 9,
                'user_id' => 3,
                'blog_category_id' => 9,
                'title' => 'Weight loss menu in 7 days with only fruits - vegetables',
                'subtitle' => 'To control your weight effectively, you can immediately apply the weight loss menu in 7 days.',
                'image' => 'healthy-3.jpg',
                'content' => 'The General Motor Diet is a fast weight loss diet that is safe for people to perform,
                                originating in the United States. This diet has been tested by scientists and received very desirable results.
                                GM diet works on the principle of providing less calories for the body, promoting energy metabolism,
                                thereby losing weight quickly. With this weight loss diet, you use foods such as vegetables and fruits mainly.
                                Combine with different cooking methods to create delicious dishes without feeling bored. Stick with the
                                weight loss menu for 7 days and you will definitely succeed.',
                'content_1'=>'Yoga is the golden key that unlocks the door to peace, tranquility, and joy.',
                'content_2' => 'Besides the diet to lose weight, science has proven that exercise is a good and healthy
                                weight loss measure. If you intend to lose weight quickly and safely, you should refer to home exercise
                                equipment such as Elipsport or exercise bikes at Elipsport, you will experience modern equipment lines,
                                care services. Best customer care. You no longer have to worry about losing weight.',
                'category' => 'Fruit',
                'image_1' => 'details/blogdetail9-1.jpg',
                'image_2' => 'details/blogdetail9-2.jpg',
            ],
        ]);

        DB::table('blog_images')->insert([
            [
                'blog_id' => 1,
                'path' => 'healthy-4.jpg',
            ],
            [
                'blog_id' => 2,
                'path' => 'healthy-5.jpg',
            ],
            [
                'blog_id' => 3,
                'path' => 'healthy-6.jpg',
            ],

        ]);

        DB::table('product_categories')->insert([
            [
                'id' => 1,
                'name' => 'Asana',
                'avatar' => 'services/Asana.jpg',
                'title' => 'Asana is “a steady, comfortable seat,” particularly for the purpose of meditation.',
                'img' => 'gallery/gallery1.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Meditation',
                'avatar' => 'services/Meditation.jpg',
                'title' => 'Meditation as your go-to resource for simple tips and guided practices to quiet your mind.',
                'img' => 'gallery/gallery2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Mudra',
                'avatar' => 'services/Mudra.jpg',
                'title' => 'A Mudra is a hand gesture that guides the energy flow to specific areas of the brain.',
                'img' => 'gallery/gallery3.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Bandhas',
                'avatar' => 'services/Bandhas.jpg',
                'title' => 'Bandhas are strengthened, renewed and rejuvenated and circulation is improved.',
                'img' => 'gallery/gallery4.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Philosophy',
                'avatar' => 'services/Philosophy.jpg',
                'title' => 'Philosophy is theoretical knowledge with the systematic techniques & personal experiment.',
                'img' => 'gallery/gallery5.jpg',
            ],
            [
                'id' => 6,
                'name' => 'Pranayama',
                'avatar' => 'services/Pranayama.jpg',
                'title' => 'Regular and sustained practice of Pranayama can supercharge your whole body!',
                'img' => 'gallery/gallery6.jpg',
            ],
            [
                'id' => 7,
                'name' => '',
                'avatar' => '',
                'title' => '',
                'img' => 'gallery/gallery7.jpg',
            ],
            [
                'id' => 8,
                'name' => '',
                'avatar' => '',
                'title' => '',
                'img' => 'gallery/gallery8.jpg',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 1,
                'name' => 'Yoga for beginners',
                'teacher_name' => 'Tracy Maclaren',
                'level'=>'Yoga for beginners',
                'study_date'=> ' 7 Days ',
                'study_time' => 'Start on 01th Every Month',
                'price' => 100,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 2,
                'product_category_id' => 1,
                'name' => 'Yoga for young people',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for Seniors',
                'study_date'=> ' 14 Days  ',
                'study_time' => ' Start on 15th Every Month',
                'price' => 100,
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
                'price' => 100,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 4,
                'product_category_id' => 1,
                'name' => 'Yoga helps kids stay active, learn patience.',
                'teacher_name' => 'Jordan Lawson',
                'level'=>'Yoga for kids',
                'study_date'=> ' Tue, Thu, Sat ',
                'study_time' => ' 6:30 - 7:30',
                'price' => 200,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 5,
                'product_category_id' => 1,
                'name' => '100 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri  ',
                'study_time' => ' 18:30 - 19:30',
                'price' => 100,
                'featured' => true,
                'tag' => 'Yoga',
            ],
            [
                'id' => 6,
                'product_category_id' => 1,
                'name' => '200 Hour Yoga Course Rishikesh',
                'teacher_name' => 'Tracy Maclaren',
                'level'=>'Yoga for beginners',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => ' 18:30 - 19:30',
                'price' => 300,
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
                'price' => 100,
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
                'price' => 100,
                'featured' => true,
                'tag' => 'Food',
            ],
            [
                'id' => 9,
                'product_category_id' => 1,
                'name' => 'Yoga for Seniors, the Elderly, and Older Adults.',
                'teacher_name' => 'Kerenza Ladonna',
                'level'=>'Yoga for Seniors',
                'study_date'=> ' Mon, Wed, Fri  ',
                'study_time' => ' 6:30 - 7:30',
                'price' => 100,
                'featured' => true,
                'tag' => 'Yoga',
            ],


        ]);

        DB::table('blog_comments')->insert([
            [
                'id'=>1,
                'blog_id' => 1,
                'user_id' => 1,
                'email' => 'brandonkelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 5,
                'product_id' => 1,
            ],
            [
                'id'=>2,
                'blog_id' => 2,
                'user_id' => 5,
                'email' => 'roybanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 3,
                'product_id' => 2,
            ],
            [
                'id'=>3,
                'blog_id' => 3,
                'user_id' => 5,
                'email' => 'codelean@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Good! I have improved a lot thanks to this lesson.',
                'rating' => 4,
                'product_id' => 3,
            ],
            [
                'id'=>4,
                'blog_id' => 4,
                'user_id' => 4,
                'email' => 'brandonkelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 5,
                'product_id' => 4,
            ],
            [
                'id'=>5,
                'blog_id' => 5,
                'user_id' => 5,
                'email' => 'roybanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 3,
                'product_id' => 5,
            ],
            [
                'id'=>6,
                'blog_id' => 6,
                'user_id' => 5,
                'email' => 'codelean@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Good! I have improved a lot thanks to this lesson.',
                'rating' => 4,
                'product_id' => 6,
            ],
            [
                'id'=>7,
                'blog_id' => 7,
                'user_id' => 2,
                'email' => 'codelean@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Good! I have improved a lot thanks to this lesson.',
                'rating' => 4,
                'product_id' => 7,
            ],
            [
                'id'=>8,
                'blog_id' => 8,
                'user_id' => 3,
                'email' => 'codelean@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Good! I have improved a lot thanks to this lesson.',
                'rating' => 2,
                'product_id' => 8,
            ],
            [
                'id'=>9,
                'blog_id' => 9,
                'user_id' => 2,
                'email' => 'codelean@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Good! I have improved a lot thanks to this lesson.',
                'rating' => 3,
                'product_id' => 9,
            ],

        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'detail1.jpg',
                'path_1' => 'detail1-3.jpg',
                'path_2' => 'detail1-1.jpg',
                'path_3' => 'detail1-2.jpg',
                'path_4' => 'detail1-4.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'detail2.jpg',
                'path_1' => 'detail2-2.jpg',
                'path_2' => 'detail2-3.jpg',
                'path_3' => 'detail2-4.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 3,
                'path' => 'detail3.jpg',
                'path_1' => 'detail3-1.jpg',
                'path_2' => 'detail3-2.jpg',
                'path_3' => 'detail3-3.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 4,
                'path' => 'detail4.jpg',
                'path_1' => 'detail4-1.jpg',
                'path_2' => 'detail4-2.jpg',
                'path_3' => 'detail4-3.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 5,
                'path' => 'detail5.jpg',
                'path_1' => 'detail5-1.jpg',
                'path_2' => 'detail5-2.jpg',
                'path_3' => 'detail5-3.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 6,
                'path' => 'detail6.jpg',
                'path_1' => 'detail1-3.jpg',
                'path_2' => 'detail6-1.jpg',
                'path_3' => 'detail6-2.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 7,
                'path' => 'detail7.jpg',
                'path_1' => 'detail7-1.jpg',
                'path_2' => 'detail7-2.jpg',
                'path_3' => 'detail7-3.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 8,
                'path' => 'detail8.jpg',
                'path_1' => 'detail8-1.jpg',
                'path_2' => 'detail8-2.jpg',
                'path_3' => 'detail8-3.jpg',
                'path_4' => '',
            ],
            [
                'product_id' => 9,
                'path' => 'detail9.jpg',
                'path_1' => 'detail9-1.jpg',
                'path_2' => 'detail9-2.jpg',
                'path_3' => 'detail9-3.jpg',
                'path_4' => 'detail9-4.jpg',
            ],
//            [
//                'product_id' => 10,
//                'path' => 'detail9.jpg',
//                'path_1' => 'detail9-1.jpg',
//                'path_2' => 'detail9-2.jpg',
//                'path_3' => 'detail9-3.jpg',
//                'path_4' => 'detail9-4.jpg',
//            ],
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
                'address'=>'  247 Cau Giay, Ha Noi',
                'teacher_name' => 'Kerenza Ladonna',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '8:00 - 10:00',
                'content'=>'My passion is to inspire others to start with Yoga. After practicing Yoga for a few years, I decided to switch to teaching yoga so that I could help others lead a happier, healthier lifestyle. I hope you will join me in this Yoga course where you will learn some great Yoga poses to get you started on this journey. Learn your yoga basic.
I will guide you through different Yoga poses with guided instruction so you know exactly how to do each pose. You will learn everything to start your Yoga practice. No experience necessary.',
                'name' => 'Yoga for beginners',
                'title' => '',
                'avatar' => 'KerenzaLadonna.jpg',
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'address'=>' 16 Dong Da, Ha Noi',
                'teacher_name' => 'Silas Dominic',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '17:00 - 19:00',
                'content'=>'For young people, practicing yoga brings a lot of benefits from physical, mental to emotional. It is not natural that more and more yoga programs for children are being applied in schools. The useful tools of Yoga for young people are many such as: improving health and nerve activity; strengthen circulatory and respiratory functions; Adjust posture, increase height; improve digestion; help relieve stress; strengthens the immune system… Yoga also teaches children to get along with their main body and friends around a lot of activities that help them learn communication skills, have fun with friends, especially with the necessary postures and impacts. support. help and help and help each other.',
                'name' => 'Yoga for young people',
                'title' => '',
                'avatar' => 'SilasDominic.jpg',
            ],
            [
                'id' => 3,
                'product_id' => 3,
                'address'=>'  24 Thanh Xuan, Ha Noi',
                'teacher_name' => 'Jordan Lawson',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '18:30 - 19:30',
                'content'=>' In recent years, the number of men practicing yoga is increasing rapidly. Practicing yoga for men regularly not only helps strengthen health but also increases flexibility for the body.
If you think that yoga is too gentle, only women can practice, then immediately drop this thought. Yoga is a subject for everyone, even men who practice yoga are very good for health and increase masculinity.',
                'name' => '30 Days of Yoga for Men',
                'title' => '',
                'avatar' => 'JordanLawson.jpg',
            ],
            [
                'id' => 4,
                'product_id' => 4,
                'address'=>'  24 Thanh Xuan, Ha Noi',
                'teacher_name' => 'Kerenza Ladonna',
                'study_date'=> ' Mon, Tues, Wes',
                'study_time' => '17:00 - 19:00',
                'content'=>' Yoga has been known for centuries, and studies have proven that regular yoga practice can significantly improve your physical and mental health.
This article will equip you with the knowledge of yoga at home to be able to perform the movements with the correct technique.',
                'name' => 'Practicing Yoga at home',
                'title' => '',
                'avatar' => 'KerenzaLadonna.jpg',
            ],
            [
                'id' => 5,
                'product_id' => 5,
                'address'=>' 184 Main Collins Streets, New York',
                'teacher_name' => 'Tracy Maclaren',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '18:30 - 19:30',
                'content'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don’t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn’t is the anything aembarrassing hidden in the middle of text.Ipsum available but the that majority have that suffered is humour or randomised words.',
                'name' => '100 Hour Yoga Course Rishikesh',
                'title' => '',
                'avatar' => 'TracyMaclaren.jpg',
            ],
            [
                'id' => 6,
                'product_id' => 6,
                'address'=>'  247 Cau Giay, Ha Noi',
                'teacher_name' => 'Jordan Lawson',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '8:00 - 10:00',
                'content'=>'My passion is to inspire others to start with Yoga. After practicing Yoga for a few years, I decided to switch to teaching yoga so that I could help others lead a happier, healthier lifestyle. I hope you will join me in this Yoga course where you will learn some great Yoga poses to get you started on this journey. Learn your yoga basic.
I will guide you through different Yoga poses with guided instruction so you know exactly how to do each pose. You will learn everything to start your Yoga practice. No experience necessary.',
                'name' => 'Yoga for beginners',
                'title' => '',
                'avatar' => 'JordanLawson.jpg',
            ],
            [
                'id' => 7,
                'product_id' => 7,
                'address'=>' 16 Dong Da, Ha Noi',
                'teacher_name' => 'Silas Dominic',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '17:00 - 19:00',
                'content'=>'For young people, practicing yoga brings a lot of benefits from physical, mental to emotional. It is not natural that more and more yoga programs for children are being applied in schools. The useful tools of Yoga for young people are many such as: improving health and nerve activity; strengthen circulatory and respiratory functions; Adjust posture, increase height; improve digestion; help relieve stress; strengthens the immune system… Yoga also teaches children to get along with their main body and friends around a lot of activities that help them learn communication skills, have fun with friends, especially with the necessary postures and impacts. support. help and help and help each other.',
                'name' => 'Yoga for young people',
                'title' => '',
                'avatar' => 'SilasDominic.jpg',
            ],
            [
                'id' => 8,
                'product_id' => 8,
                'address'=>'  24 Thanh Xuan, Ha Noi',
                'teacher_name' => 'Kerenza Ladonna',
                'study_date'=> ' Mon, Wed, Fri ',
                'study_time' => '18:30 - 19:30',
                'content'=>' In recent years, the number of men practicing yoga is increasing rapidly. Practicing yoga for men regularly not only helps strengthen health but also increases flexibility for the body.
If you think that yoga is too gentle, only women can practice, then immediately drop this thought. Yoga is a subject for everyone, even men who practice yoga are very good for health and increase masculinity.',
                'name' => '30 Days of Yoga for Men',
                'title' => '',
                'avatar' => 'KerenzaLadonna.jpg',
            ],
            [
                'id' => 9,
                'product_id' => 9,
                'address'=>'  24 Thanh Xuan, Ha Noi',
                'teacher_name' => 'Kerenza Ladonna',
                'study_date'=> ' Mon, Wed, Fri  ',
                'study_time' => ' 6:30 - 7:30',
                'content'=>' In recent years, the number of men practicing yoga is increasing rapidly. Practicing yoga for men regularly not only helps strengthen health but also increases flexibility for the body.
If you think that yoga is too gentle, only women can practice, then immediately drop this thought. Yoga is a subject for everyone, even men who practice yoga are very good for health and increase masculinity.',
                'name' => '30 Days of Yoga for Men',
                'title' => '',
                'avatar' => 'KerenzaLadonna.jpg',
            ],
        ]);

    }
}
