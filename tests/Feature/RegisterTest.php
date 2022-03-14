<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_register_form()
    {
        $response = $this->get('signup');
        $response->assertStatus(200);
    }
    public function test_signup_user()
    {
        $user = new User();

        $user->name = 'Nells';
        $user->email = 'nells@yrgo.com';
        $user->passowrd = '123';

        $register = $this
            ->followingRedirects()
            ->post('signup', [
                'name' => "$user->name",
                'email' => "$user->email",
                'password' => "$user->password",
            ]);
        $register->assertSuccessful();
    }
}
