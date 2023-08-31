<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testViewLoginSuccess()
    {
        $this->get('/login')->assertSeeText('Login page');
    }

    public function testOnLoginSuccess()
    {
        $form = [
            'user' => 'utifmd',
            'password' => 'rahasia'
        ];
        $this->post('/login', $form)
            ->assertRedirect('/')
            ->assertSessionHas('user', 'utifmd');
    }

    public function testOnLoginFormEmpty()
    {
        $form = [
            'user' => '',
            'password' => 'rahasia'
        ];
        $this->post('/login', $form)
            ->assertSeeText('User or password is required');
    }

    public function testOnLoginUserNotFound()
    {
        $form = [
            'user' => 'utif',
            'password' => 'rahasia'
        ];
        $this->post('/login', $form)
            ->assertSeeText('User input not found');
    }

    public function testOnLoginWrongPassword()
    {
        $form = [
            'user' => 'utifmd',
            'password' => 'passwd salah'
        ];
        $this->post('/login', $form)
            ->assertSeeText('Password input doesnt match');
    }

    public function testOnLogoutSuccess()
    {
        $data = ['user' => 'utifmd'];
        $this->withSession($data)->post('/logout')
            ->assertRedirect('/')
            ->assertSessionMissing('user');
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
