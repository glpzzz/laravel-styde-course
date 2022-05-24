<?php

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeUserControllerTest extends TestCase
{
    public function test_welcome_users_with_nickname()
    {
        $this->get('/greeting/gabriel/glpz')
            ->assertStatus(200)
            ->assertSee('Hello Gabriel. Your nickname is glpz.');

    }

    public function test_welcome_users_without_nickname()
    {
        $this->get('/greeting/gabriel')
            ->assertStatus(200)
            ->assertSee("Hello Gabriel.", false);
    }
}
