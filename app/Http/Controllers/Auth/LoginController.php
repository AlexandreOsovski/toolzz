<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view("auth.login");
    }
    public function login(Request $request)
    {
        $credentials = $request->only('user', 'password');

        if (empty($credentials['user']) || empty($credentials['password'])) {
            toastr("Digite o usuario e a senha corretamente", 'warning');
            return redirect()->route('login.get');
        }

        $client = $this->userService->getByUser($credentials['user']);

        if (!$client) {
            toastr('Usuario não encontrado.', 'error');
            return redirect()->back();
        }

        if (!password_verify($credentials['password'], $client->password)) {

            toastr('Senha incorreta.', 'error');
            return redirect()->back();
        }

        if (Auth::guard('web')->attempt(['user' => $credentials['user'], 'password' => $credentials['password']])) {

            return redirect()->route('dashboard.get');
        }

        toastr('Houve um erro ao tentar realizar o login', 'error');
        return redirect()->back();
    }
}
