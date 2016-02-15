<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewAnotherUsersTweetsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testViewingAnotherUserTweets()
    {
        $user = factory(User::class)->create([]);
        $tweet = factory(Tweet::class)->make([]);
        $this->visit('/')
            ->see('Laravel 5');
    }
}
