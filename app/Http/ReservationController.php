<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservations(){
        return view('admin.reservations');
     }
     public function reservationAdd(){
        return view('admin.reservationAdd');
     }
}
