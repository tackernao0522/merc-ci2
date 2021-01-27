<?php

namespace Tests\Feature\MyPage;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SoldItemsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestSold()
    {
        $response = $this->get(route('mypage.sold-items'));

        $response->assertRedirect(route('login'));
    }

    public function testAuthSold()
    {
        $user = Factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('mypage.sold-items'));

        $response->assertStatus(200)
            ->assertViewIs('mypage.sold_items')
            ->assertSee('出品した商品');
    }
}
