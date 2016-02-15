<?php

use App\Tweet;
use App\User;
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
    use DatabaseMigrations;
    public function testViewingAnotherUserTweets()
    {


        $user = factory(User::class)->create(['username'=>'johndoe']);
        $tweet = factory(Tweet::class)->make(['body'=>'My first tweet']);

        $user->tweets()->save($tweet);

        $this->visit('/johndoe')
            ->see('My first tweet');
    }
}
