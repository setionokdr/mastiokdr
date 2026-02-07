<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nisn',
        'nama_lengkap',
        'tanggal_lahir',
        'alamat',
        'kelas',
    ];
    protected $useTimestamps = true;
}
