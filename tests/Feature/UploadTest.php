<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UploadTest extends TestCase
{
    use RefreshDatabase;
    public function test_view_admin_form()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();


        $response = $this->actingAs($user)
            ->get('admin');
        $response->assertStatus(200);
    }
}
