<?php

namespace Tests\Feature;

use App\Models\Exhibition;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ExhibitionTest extends TestCase
{
    use RefreshDatabase;
    public function test_view_exhibition_page()
    {
        $user = new User();
        $user->name = 'Mr Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();


        $response = $this->actingAs($user)
            ->get('exhibitions');
        $response->assertSeeText('Current exhibitions');
        $response->assertStatus(200);
    }

    use RefreshDatabase;
    public function test_view_exhibition_page_content()
    {
        $user = new User();
        $user->name = 'Mr Nells';
        $user->email = 'nells@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $attributes = new Exhibition();
        $attributes->exhibition = 'katt';
        $attributes->id = '1';
        $attributes->exhibition_image = 'katt';
        $attributes->save();

        $response = $this->actingAs($user)
            ->get('exhibitions');
        $response->assertSeeText('katt');
        $response->assertStatus(200);
    }
}
