<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table            = 'pengguna';
	protected $primaryKey       = 'id';
	protected $useAutoIncrement = true;
	protected $insertID         = 0;
	protected $returnType       = 'array';
	protected $useSoftDeletes   = false;
	protected $allowedFields    = ['name', 'email', 'slug'];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	public function getUserData()
	{
		return $this->db->table('pengguna')->join('account_balance', 'pengguna.id=account_balance.id_user')
			->get()->getResultObject();
	}
}
