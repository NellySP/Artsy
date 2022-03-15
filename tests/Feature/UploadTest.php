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
        $user->name = 'Mr Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();


        $response = $this->actingAs($user)
            ->get('admin');
        $response->assertStatus(200);
    }

    public function test_create_exhibition_content()
    {
        $user = new User();
        $user->name = 'Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $attributes = [
            'title' => 'katt',
            'artist' => 'katt',
            'exhibition' => 'katt',
            'exhibition_id' => '1',
            'image' => 'katt',
        ];

        $this->from('admin')->actingAs($user)->post('upload', $attributes);

        $this->assertDatabaseHas('art', $attributes);
    }
}
