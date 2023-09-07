<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BladeTemplateTest extends TestCase
{
    public function testSingleHobbySuccess()
    {
        $data = ['hobbies' => ['hobby 1']];

        $this->view('users.conditional', $data)
            ->assertSeeText('I have one hobby');
    }
    public function testMultipleHobbiesSuccess()
    {
        $data = ['hobbies' => ['hobby 1', 'hobby 2']];

        $this->view('users.conditional', $data)
            ->assertSeeText('I have multiple hobbies');
    }

    public function testHasNoHobbySuccess()
    {
        $this->view('users.conditional', ['hobbies' => []])
            ->assertSeeText('I do not have any hobbies');
    }
}
