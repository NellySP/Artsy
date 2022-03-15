<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;
    public function test_view_dashboard()
    {
        $user = new User();
        $user->name = 'Mr Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();


        $response = $this->actingAs($user)
            ->get('dashboard');
        $response->assertStatus(200);
    }

    public function test_view_dashboard_as_not_signed_in()
    {

        $response = $this->assertGuest()
            ->get('dashboard');
        $response->assertStatus(302);
    }
}
