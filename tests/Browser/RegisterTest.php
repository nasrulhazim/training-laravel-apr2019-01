<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_regiser_and_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->screenshot('register-step-01')
                    ->type('name', 'demo')
                    ->screenshot('register-step-02')
                    ->type('email', 'demo@email.com')
                    ->screenshot('register-step-03')
                    ->type('password', 'password')
                    ->screenshot('register-step-04')
                    ->type('password_confirmation', 'password')
                    ->screenshot('register-step-05')
                    ->press('Register')
                    ->screenshot('register-step-06')
                    ->assertPathIs('/home')
                    ->screenshot('register-step-07');
        });
    }
}
