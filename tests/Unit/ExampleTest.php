<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->hasAddress()->create();
        $this->assertNotNull($user->email_verified_at);
        $this->assertNotNull($user->address);
    }
}
