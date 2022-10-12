<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table            = 'user';
	protected $primaryKey       = 'id';
	protected $useAutoIncrement = true;
	protected $insertID         = 0;
	protected $returnType       = 'array';
	protected $useSoftDeletes   = true;
	protected $allowedFields    = ['name', 'email', 'slug'];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
}
