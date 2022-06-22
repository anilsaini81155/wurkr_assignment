<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Chat;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_messages()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/api/GetMessages');
        $response->assertStatus(404);
    }

    public function test_get_users()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/api/GetUsers');
        $response->assertStatus(404);
    }

}
