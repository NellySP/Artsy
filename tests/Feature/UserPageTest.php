<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserPageTest extends TestCase
{
    use RefreshDatabase;
    public function test_view_user_page()
    {
        $user = new User();
        $user->name = 'Mr Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();


        $response = $this->actingAs($user)
            ->get('user-page');
        $response->assertStatus(200);
    }
    public function test_view_user_page_as_guest()
    {
        $response = $this->assertGuest()
            ->get('user-page');
        $response->assertStatus(302);
    }

    // public function test_view_favorite_art()
    // {
    // }
}
