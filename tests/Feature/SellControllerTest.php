<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SellControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestCreate()
    {
        $response = $this->get(route('sell'));

        $response->assertRedirect(route('login'));
    }

    public function testAuthCreate()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('sell'));

        $response->assertStatus(200)
            ->assertViewIs('sell');
    }
}
