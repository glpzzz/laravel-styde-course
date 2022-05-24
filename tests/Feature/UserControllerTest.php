<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserControllerTest extends TestCase
{

    public function testIndex()
    {
        $this->get('/user')
            ->assertStatus(200)
            ->assertSee('Users')
            ->assertSee('Axl')
            ->assertSee('Slash')
            ->assertSee('Duff')
            ->assertSee('Matt')
            ->assertSee('Izzy');
    }

    public function testNew()
    {
        $this->get('/user/new')
            ->assertStatus(200)
            ->assertSee('New User');
    }

    public function testShow()
    {
        $this->get('/user/1')
            ->assertStatus(200)
            ->assertSee('Details of user 1');
    }
}
