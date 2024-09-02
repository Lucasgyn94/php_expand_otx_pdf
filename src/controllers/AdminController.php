<?php

namespace Lucas\ExpansaOfx\Controllers;

use Lucas\ExpansaOfx\Models\User;


class AdminController {
    private $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function activateUser($userId) {
        $this->userModel->activateUser($userId);
        header('Location: /dashboard');
    }
}
?>
