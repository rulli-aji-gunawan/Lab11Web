<?php 

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = TRUE;
    protected $allowedFields = ['judul','isi','status','slug','gambar'];
}

