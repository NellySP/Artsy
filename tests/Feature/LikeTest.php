<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LikeTest extends TestCase
{
    use RefreshDatabase;
    public function test_like_content()
    {
        $user = new User();
        $user->name = 'Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $attributes = [
            'user_id' => $user->id,
            'image_id' => '1',
            'like' => '1',
            'image_image' => 'katt',
        ];

        $this->followingRedirects()->from('/')->actingAs($user)->post('/like', $attributes);

        $this->assertDatabaseHas('like', [
            'user_id' => $user->id,
            'image_id' => '1',
            'like' => '1',
            'image' => 'katt',
        ]);
    }
}
