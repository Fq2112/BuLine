<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukangController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        return view('bukang.beranda');
    }

    public function showFriends()
    {
        return view('bukang.friends');
    }

    public function showFriendsProfile()
    {
        return view('bukang.friend_profile');
    }

    public function showProfile()
    {
        return view('bukang.profile');
    }
}
