<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'post_id' => 1,
            'name' => 'John Doe',
            'email' => 'jhondoe@gmail.com',
            'website' => 'http://johndoe.com',
            'comment' => 'This is the first comment.',
        ]);
    }
}
