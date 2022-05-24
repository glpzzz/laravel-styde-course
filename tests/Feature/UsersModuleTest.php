<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_loads_the_users_list_page()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Users');
    }

    /**
     * @test
     */
    public function test_it_loads_the_user_details_page(){
        $this->get('/users/1')
            ->assertStatus(200)
            ->assertSee('Details of user 1');
    }

    public function test_it_loads_new_user_page(){
        $this->get('/users/new')
            ->assertStatus(200)
            ->assertSee('New User');
    }
}
