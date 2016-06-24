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
    public function testExample()
    {
        $this->visit('/register')
        ->type('Tester2', 'name')
        ->type('tester2@gn.com', 'email')
        ->type('password12', 'password')
        ->type('password12', 'password_confirmation')
        ->press('Register')
        ->seePageIs('/');
    }
}
