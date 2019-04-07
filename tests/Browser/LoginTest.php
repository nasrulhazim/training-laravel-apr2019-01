<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /** @test */
    public function it_can_see_login_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    // ->pause(2000)
                    ->screenshot('page-login')
                    ->assertSee('Login');
        });
    }
}
