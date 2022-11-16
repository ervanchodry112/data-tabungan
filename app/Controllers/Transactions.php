<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transactions extends BaseController
{
    public function index()
    {
        return redirect()->to(base_url('dashboard/history'));
    }

    public function setor()
    {
        $data = [
            'title' => 'Setor'
        ];

        return view('transaksi/setor', $data);
    }

    public function tarik()
    {
    }

    public function laporan()
    {
    }
}
