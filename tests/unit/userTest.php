<?php

use App\Tweet;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class userTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    public function testAUserCanBeFoundByUsername()
    {


        $createdUser = factory(User::class)->create(['username'=>'johndoe']);
        $foundUser= User::findByUsername('johndoe');

       $this->assertEquals($createdUser->id, $foundUser->id);
       $this->assertEquals($createdUser->username, $foundUser->username);
    }
}
