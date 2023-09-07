<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testViewForGuestSuccess()
    {
        $this->get('/')
            ->assertRedirect('/login');
    }

    public function testViewForMemberSuccess()
    {
        $this->withSession(['user' => 'utifmd'])
            ->get('/')
            ->assertRedirect('/todo-list');
    }
}
