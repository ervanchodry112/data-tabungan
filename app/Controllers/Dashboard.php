<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('dashboard/dashboard', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'History'
        ];
        return view('dashboard/history', $data);
    }

    public function users()
    {
        $data = [
            'title' => "Users",

            // TODO : Masukkan data user ke dalam array dibawah ini
            'users' => []
        ];
        return view('dashboard/users', $data);
    }
}
