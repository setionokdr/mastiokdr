<?php

namespace App\Models;

use CodeIgniter\Model;

class PermohonanPerubahanModel extends Model
{
    protected $table = 'permohonan_perubahan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'student_id',
        'perubahan_diminta',
        'alasan',
        'status',
    ];
    protected $useTimestamps = true;
}
