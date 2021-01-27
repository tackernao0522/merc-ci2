<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testTop()
    {
        $response = $this->get(route('top'));

        $response->assertStatus(200)
            ->assertViewIs('items.items');
    }
}
