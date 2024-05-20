<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_with_skills_array()
    {
        $users = \App\Models\User::factory()->count(5)->create();

        foreach ($users as $user) {
            $this->assertEmpty($user->description);
        }

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}