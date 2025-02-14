<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HolaMundoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function hola_mundo_endpoint_returns_correct_response()
    {
        $response = $this->getJson('/api/hola-mundo');

        $response
            ->assertStatus(200)
            ->assertJsonStructure(['message'])
            ->assertJson(['message' => 'Hola Mundo']);
    }

    /** @test */
    public function hola_mundo_endpoint_stores_message_in_database()
    {
        $this->assertDatabaseCount('expenses', 0);

        $this->getJson('/api/hola-mundo');

        $this->assertDatabaseCount('expenses', 1);
        $this->assertDatabaseHas('expenses', [
            'description' => 'Hola Mundo'
        ]);
    }
}