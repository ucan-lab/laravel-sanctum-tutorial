<?php declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class MeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testMeSuccess(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/api/me');

        $response->assertStatus(200);
        $response->assertJson([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }
}
