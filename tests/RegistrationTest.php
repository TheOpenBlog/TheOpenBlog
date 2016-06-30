<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSuitSuccess()
    {
        $this->visit('/register')
        ->type('Tester', 'name')
        ->type('tester@gmail.com', 'email')
        ->type('password12', 'password')
        ->type('password12', 'password_confirmation')
        ->press('Register')
        ->seePageIs('/');
    }
    public function testSuitFailure()
    {
        $this->visit('/register')
        ->type('TestFail', 'name')
        ->type('failedtester@goofy.com', 'email')
        ->type('password12', 'password')
        ->type('wrongpasswd', 'password_confirmation')
        ->press('Register')
        ->seePageIs('/register');
    }
}
