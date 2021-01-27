<?php

namespace Tests\Feature\MyPage;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoughtItemsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestBought()
    {
        $response = $this->get(route('mypage.bought-items'));

        $response->assertRedirect(route('login'));
    }

    public function testAuthBought()
    {
        $user = Factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('mypage.bought-items'));

        $response->assertStatus(200)
            ->assertViewIs('mypage.bought_items');
    }
}
