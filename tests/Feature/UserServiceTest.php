<?php

namespace Tests\Feature;

use App\Services\IUserService;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    private IUserService $userService;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->userService = $this->app->make(IUserService::class);
    }

    public function testSample()
    {
        self::assertTrue(true);
    }

    public function testLoginSuccess()
    {
        $onLogin = $this->userService->login('utifmd', 'rahasia');
        self::assertTrue($onLogin);
    }

    public function testLoginNotFoundSuccess()
    {
        $onLogin = $this->userService->login('utif', 'rahasia');
        self::assertFalse($onLogin);
    }

    public function testLoginWrongPasswdSuccess()
    {
        $onLogin = $this->userService->login('utifmd', 'password salah');
        self::assertFalse($onLogin);
    }
}
