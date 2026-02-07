# Aplikasi Permohonan Perubahan Data Siswa (CodeIgniter 4)

Aplikasi ini membantu sekolah mengelola permohonan perubahan data siswa seperti nama, alamat, tanggal lahir, dan kelas.

## Fitur
- Form pengajuan permohonan perubahan data siswa
- Daftar permohonan beserta status
- Detail permohonan per siswa

## Prasyarat
- PHP >= 7.4
- MySQL
- Composer

## Instalasi
1. Install dependensi:
   ```bash
   composer install
   ```
2. Salin dan konfigurasi environment:
   ```bash
   cp .env.example .env
   ```
3. Atur database pada `.env`:
   ```
   database.default.hostname = localhost
   database.default.database = permohonan_siswa
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   ```
4. Jalankan migrasi:
   ```bash
   php spark migrate
   ```
5. Jalankan server lokal:
   ```bash
   php spark serve
   ```

## Contoh Data Awal
Jalankan SQL berikut untuk menambahkan data siswa contoh:

```sql
INSERT INTO students (nisn, nama_lengkap, tanggal_lahir, alamat, kelas, created_at, updated_at)
VALUES
  ('1234567890', 'Alya Putri', '2008-04-10', 'Jl. Melati No. 10', 'X IPA 1', NOW(), NOW()),
  ('1234567891', 'Bima Pratama', '2007-12-02', 'Jl. Kenanga No. 5', 'XI IPS 2', NOW(), NOW());
```
