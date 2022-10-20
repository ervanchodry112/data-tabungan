<?php

namespace App\Controllers;

use App\Models\Balance;
use App\Models\User;

class Dashboard extends BaseController
{
	protected $user;
	protected $balance;

	public function __construct()
	{
		$this->user = new User();
		$this->balance = new Balance();
	}

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
			'users' => $this->user->getUserData()
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

	public function add_user()
	{
		$input = $this->request->getVar();
		$user = [
			'name' => $input['nama'],
			'email' => $input['email'],
			'slug' => url_title($input['nama'], '-', true)
		];

		$this->user->insert($user);

		$balance = [
			'id_user' => $this->user->insertID(),
			'balance' => $input['balance']
		];
		$this->balance->insert($balance);

		if ($this->user->affectedRows() > 0 && $this->balance->affectedRows() > 0) {
			session()->setFlashdata('pesan', 'User has been added successfully');
			return redirect()->to('/dashboard/users');
		}
	}

	public function edit($slug)
	{
		$users = $this->user->where('slug', $slug)->first();

		$data = [
			'title' => 'Edit User',
			'user' => $users
		];
		return view('dashboard/edit', $data);
	}

	public function update()
	{
		$input = $this->request->getVar();
		$user = [
			'name' => $input['nama'],
			'email' => $input['email'],
			'id' => $input['id']
		];

		$this->user->save($user);

		if ($this->user->affectedRows() > 0) {
			session()->setFlashdata('pesan', 'User berhasil di updates');
			return redirect()->to('/dashboard/users');
		}
	}

	public function delete($slug)
	{
		$id = $this->user->select('id')->where('slug', $slug)->first();
		$this->balance->where('id_user', $id['id'])->delete();
		$this->user->where('slug', $slug)->delete();
		if ($this->user->affectedRows() > 0) {
			session()->setFlashdata('pesan', 'User berhasil di hapus');
			return redirect()->to('/dashboard/users');
		}
	}
}
