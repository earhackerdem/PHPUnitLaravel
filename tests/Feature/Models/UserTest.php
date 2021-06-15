<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user()
    {
        //Proceso

        User::factory()->create(['email'=>'earhackerdem@gmail.com']);

        $this->assertDatabaseHas('users',[
            'email' => 'earhackerdem@gmail.com'
        ]);

        $this->assertDatabaseMissing('users',[
            'email' => 'noexiste@gmail.com'
        ]);
    }
}
