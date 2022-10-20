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
			'users' => $model->getUserData()
		];

		return view('dashboard/users', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Add New User'
		];
		return view('dashboard/create', $data);
	}

	public function update()
	{
		$data = [
			'title' => 'Edit User'
		];
		return view('dashboard/update', $data);
	}
}
