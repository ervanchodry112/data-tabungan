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
		$model = new \App\Models\User();

	
		
        $data = [
            'title' => "Users",
            'users' => $model->findAll()
        ];

        return view('dashboard/users', $data);
    }
}
