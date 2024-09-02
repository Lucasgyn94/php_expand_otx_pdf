<?php

namespace Lucas\ExpansaOfx\Controllers;

use Lucas\ExpansaOfx\Models\User;

class UserController {
    private $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function register($request) {
        $this->userModel->create($request['username'], $request['email'], $request['password']);
        header('Location: /login');
    }
}
?>
