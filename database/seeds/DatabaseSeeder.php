<?php

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@mail.ru',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::create([
            'name' => 'John Doe',
            'email' => 'john@mail.ru',
            'password' => bcrypt('password'),
        ]);

        $user3 = User::create([
            'name' => 'Kairat Nurtas',
            'email' => 'kairat@mail.ru',
            'password' => bcrypt('password'),
        ]);

        $question = Question::create([
            'title'=>'This is my first question. Learning Laravel.',
            'content'=>'Okay, this is my first question in this forum. Can you please help me with learning Laravel?',
            'user_id'=>$user->id
        ]);

        Answer::create([
            'content'=>'Yes! It is so easy to learn Laravel',
            'question_id'=>$question->id
        ]);

        Answer::create([
            'content'=>'Oh, i think laravel is one of the hardest frameworks!',
            'question_id'=>$question->id
        ]);

        Answer::create([
            'content'=>'You would better take the Bitlab Academy course!',
            'question_id'=>$question->id
        ]);




        $question = Question::create([
            'title'=>'Hey! How to get user ID?',
            'content'=>'Now i am using laravel in my project, and i dont know how to get user_id from route',
            'user_id'=>$user2->id
        ]);

        Answer::create([
            'content'=>'Laravel do it automatically',
            'question_id'=>$question->id
        ]);

        Answer::create([
            'content'=>'RTFM!!!',
            'question_id'=>$question->id
        ]);

        Answer::create([
            'content'=>'OMG!',
            'question_id'=>$question->id
        ]);



        $question = Question::create([
            'title'=>'Which programming language is the best?',
            'content'=>'I am gonna start learning programming, because now there are no tois and parties. So, could you please write which language is the best?',
            'user_id'=>$user3->id
        ]);

        Answer::create([
            'content'=>'Java! OFK!',
            'question_id'=>$question->id
        ]);

        Answer::create([
            'content'=>'Python. It is easy to learn',
            'question_id'=>$question->id
        ]);

        Answer::create([
            'content'=>'C++',
            'question_id'=>$question->id
        ]);
    }
}
