<?php

namespace App\Controllers;

use App\Helper\Session;
use App\Models\Booking;
use App\Models\User;
use \Core\View;
use \Core\Controller;

/**
 * Booking controller
 */
class BookingController extends Controller
{

    public function __construct()
    {
        $session = Session::getInstance();
        if (!$session->isSignedIn()){
            header('Location: /login');
        }
    }

    public function index()
    {
        $bookings = Booking::orderBy('id', 'desc')->with('user')->get();
        View::renderTemplate('Bookings/index.html', ['bookings' => $bookings]);
    }

    public function create()
    {
        View::renderTemplate('Bookings/create.html');
    }

    public function store()
    {

    if (!isset($_SESSION['user_id'])) {
        die('User not logged in');
    }

        $bookings = new Booking();
        $bookings->user_id = $_SESSION['user_id'];
        $bookings->where_to = $_POST['where_to'];
        $bookings->how_many = $_POST['how_many'];
        $bookings->check_in = $_POST['check_in'];
        $bookings->check_out = $_POST['check_out'];
        $bookings->details = $_POST['details'];
        $bookings->save();
        header("Location: /bookings");
    }

    public function show()
    {

    }

    public function edit()
    {
        $id = $_GET['id'];
        $booking = Booking::findOrFail($id);

        View::renderTemplate('Bookings/edit.html',['booking' => $booking]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $booking = Booking::findOrFail($id);
        $booking->where_to = $_POST['where_to'];
        $booking->how_many = $_POST['how_many'];
        $booking->check_in = $_POST['check_in'];
        $booking->check_out = $_POST['check_out'];
        $booking->details = $_POST['details'];
        $booking->save();
        header("Location: /bookings");
    }

    public function destroy()
    {
        $id = $_POST['id'];
        $booking = Booking::findOrFail($id);
        $booking->delete();
        header("Location: /bookings");
    }

}
