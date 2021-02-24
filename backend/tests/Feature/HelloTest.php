<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        User::factory()->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);
        User::factory()->count(10)->create();

        $this->assertDatabaseHas('users',[
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);

        // $this->assertTrue(true);
        //
        // $response = $this->get('/');
        // $response->assertStatus(200);
        //
        // $response = $this->get('/hello');
        // $response->assertStatus(302);
        //
        // $user = User::factory()->make();
        // $response = $this->actingAs($user)->get('/hello');
        // $response->assertStatus(200);
        //
        // $response = $this->get('/no_route');
        // $response->assertStatus(404);
    }
}
