<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    function viewHome(Request $request): Response|RedirectResponse
    {
        if ($request->session()->exists('user'))
            return redirect('/todo-list');

        return redirect('/login');
    }

    function viewTodoList(Request $request): Response|RedirectResponse
    {
        return \response()->view('users.todo-list');
    }

    function viewConditional(Request $request)
    {
        $data = ['hobbies' => ['hobby 1']];
        return \response()->view('users.conditional', $data);
    }
}
