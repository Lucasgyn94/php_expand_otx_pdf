<?php

namespace Lucas\ExpansaOfx\Controllers;

use Lucas\ExpansaOfx\Services\AuthService;

class AuthController {
    private $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    public function login($request) {
        if ($this->authService->login($request['username'], $request['password'])) {
            header('Location: /dashboard');
    
        } else {
            header('Location: /login?error=invalid_credentials');
        }
    }

    public function logout() {
        $this->authService->logout();
        header('Location: /login');
    }
}
?>
