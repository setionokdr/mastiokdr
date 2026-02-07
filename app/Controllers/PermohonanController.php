<?php

namespace App\Controllers;

use App\Models\PermohonanPerubahanModel;
use App\Models\StudentModel;
use CodeIgniter\HTTP\RedirectResponse;

class PermohonanController extends BaseController
{
    public function index(): string
    {
        $permohonanModel = new PermohonanPerubahanModel();
        $studentModel = new StudentModel();

        $permohonan = $permohonanModel
            ->select('permohonan_perubahan.*, students.nama_lengkap')
            ->join('students', 'students.id = permohonan_perubahan.student_id')
            ->orderBy('permohonan_perubahan.created_at', 'DESC')
            ->findAll();

        return view('permohonan/index', [
            'permohonan' => $permohonan,
            'students' => $studentModel->findAll(),
        ]);
    }

    public function create(): string
    {
        $studentModel = new StudentModel();

        return view('permohonan/create', [
            'students' => $studentModel->orderBy('nama_lengkap', 'ASC')->findAll(),
        ]);
    }

    public function store(): RedirectResponse
    {
        $permohonanModel = new PermohonanPerubahanModel();

        $payload = [
            'student_id' => $this->request->getPost('student_id'),
            'alasan' => $this->request->getPost('alasan'),
            'status' => 'menunggu',
            'perubahan_diminta' => json_encode([
                'nama_lengkap' => $this->request->getPost('nama_lengkap_baru'),
                'alamat' => $this->request->getPost('alamat_baru'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir_baru'),
                'kelas' => $this->request->getPost('kelas_baru'),
            ], JSON_UNESCAPED_UNICODE),
        ];

        $permohonanModel->insert($payload);

        return redirect()->to('/permohonan');
    }

    public function show(int $id): string
    {
        $permohonanModel = new PermohonanPerubahanModel();

        $permohonan = $permohonanModel
            ->select('permohonan_perubahan.*, students.nama_lengkap, students.nisn, students.kelas')
            ->join('students', 'students.id = permohonan_perubahan.student_id')
            ->find($id);

        $perubahan = $permohonan ? json_decode($permohonan['perubahan_diminta'], true) : [];

        return view('permohonan/show', [
            'permohonan' => $permohonan,
            'perubahan' => $perubahan,
        ]);
    }
}
