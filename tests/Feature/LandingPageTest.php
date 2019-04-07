<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingPageTest extends TestCase
{
    /** @test */
    public function it_return_status_code_200()
    {
        $this
            ->get('/')
            ->assertStatus(200);
    }

    /** @test */
    public function it_has_login_link()
    {
        $this
            ->get('/')
            ->assertSeeText('Login');
    }

    /** @test */
    public function it_has_register_link()
    {
        $this
            ->get('/')
            ->assertSeeText('Register');
    }
}
