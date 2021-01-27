<?php

namespace Tests\Feature\MyPage;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestProfile()
    {
        $response = $this->get(route('mypage.edit-profile'));

        $response->assertRedirect(route('login'));
    }

    public function testAuthProfile()
    {
        $user = Factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('mypage.edit-profile'));

        $response->assertStatus(200)
            ->assertViewIs('mypage.profile_edit_form')
            ->assertSee('プロフィール編集');
    }
}
