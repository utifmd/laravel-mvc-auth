<?php

namespace App\Http\Controllers;

use App\Services\IUserService;
use Illuminate\Http\{RedirectResponse, Request, Response};

class UserController extends Controller
{
    private IUserService $userService;

    /**
     * @param IUserService $userService
     */
    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    function viewLogin(): Response
    {
        $data = [
            'title' => 'Login page'
        ];
        return response()->view('users.login', $data);
    }

    function onLogin(Request $request): Response|RedirectResponse
    {
        $userInput = $request->input('user');
        $passwdInput = $request->input('password');

        if (empty($userInput) || empty($passwdInput)){
            return \response()->view('users.login', [
                'title' => 'Login Page',
                'error' => 'User or password is required'
            ]);
        }
        if (!$this->userService->isUserExist($userInput)) {
            return \response()->view('users.login', [
                'title' => 'Login page',
                'error' => 'User input not found'
            ]);
        }
        if (!$this->userService->login($userInput, $passwdInput)){
            return \response()->view('users.login', [
                'title' => 'Login page',
                'error' => 'Password input doesnt match'
            ]);
        }
        $request->session()->put('user', $userInput);

        return redirect('/');
    }

    function onLogout(Request $request): Response|RedirectResponse
    {
        $request->session()->forget('user');
        return redirect('/');
    }
}
