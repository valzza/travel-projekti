<?php

namespace App\Controllers;

use App\Helper\Session;
use App\Models\User;
use \Core\Controller;
use Core\View;


class AuthController extends Controller
{
    public function loginForm()
    {
        $session = Session::getInstance();
        $message = '';
        if (!empty($session->message)) {
            $message = $session->message;
        }

        if (isset($_SESSION['user_id'])) {
            header('Location: /bookings');
        }

        View::renderTemplate('Users/login.html', ['message' => $message]);
    }

    public function loginStore()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::where('email', $email)->where('password', $password)->latest()->first();
        $session = Session::getInstance();

        if ($user) {
            $session->login($user);
            header('Location: /bookings');
            exit;
        }

        $session->message("Your email or password is incorrent");
        header('Location: /login');
        exit;
    }

    public function logout()
    {
        $session = Session::getInstance();
        if (!$session->isSignedIn()){
            header('Location: /login');
        }

        $session = Session::getInstance();
        if (!$session->isSignedIn()){
            header('Location: /login');
        }

        $session = Session::getInstance();
        $session->logout();
        header('Location: /');
    }
}
