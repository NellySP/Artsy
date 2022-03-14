<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;



class LogoutTest extends TestCase
{
    use RefreshDatabase;
    public function test_view_logout_button()
    {
        $user = User::factory()->create();
        $this->actingAs($user)
            ->get('/dashboard')->assertok();
    }

    public function test_logout_user()
    {
        $user = User::factory()->create();
        // why are you red?
        $this->actingAs($user);
        $this->followingRedirects($user)->get('logout')->assertok()->assertSeeText('Login');
    }
}
