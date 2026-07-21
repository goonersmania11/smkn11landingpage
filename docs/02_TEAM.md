# 👥 Team Documentation

## Project

SMKN11 Landing Page

---

# Anggota Tim

| No | Nama | Role | Branch |
|----|------|------|--------|
| 1 | (Nama Kamu) | Backend Lead | develop |
| 2 | (Nama Anggota) | Backend Developer - Master Data | feature/master-data |
| 3 | (Nama Anggota) | Backend Developer - Content | feature/content |
| 4 | (Nama Anggota) | Backend Developer - Profile | feature/profile |

---

# Tugas Backend Lead

Bertanggung jawab terhadap:

- Setup Laravel Project
- Setup Repository GitHub
- Konfigurasi Database
- Membuat Migration
- Membuat Seeder
- Authentication
- Dashboard
- Review Pull Request
- Merge Branch ke develop
- Menentukan standar coding

File yang biasanya dikelola:

- routes/web.php
- database/migrations/
- app/Models/
- config/
- .env.example

---

# Backend Developer 1 (Master Data)

Modul yang dikerjakan:

- CRUD Jurusan
- CRUD Guru
- CRUD Ekstrakurikuler

Folder yang dikerjakan:

- app/Http/Controllers/Admin
- app/Models
- resources/views/admin

---

# Backend Developer 2 (Content)

Modul yang dikerjakan:

- CRUD Berita
- CRUD Slider
- CRUD Galeri

Folder yang dikerjakan:

- app/Http/Controllers/Admin
- app/Models
- resources/views/admin

---

# Backend Developer 3 (Profile)

Modul yang dikerjakan:

- CRUD Profil Sekolah
- CRUD Kontak
- CRUD User (jika disepakati)

Folder yang dikerjakan:

- app/Http/Controllers/Admin
- app/Models
- resources/views/admin

---

# Aturan Tim

Semua anggota wajib:

- Pull project terbaru sebelum mulai bekerja.
- Bekerja pada branch masing-masing.
- Tidak melakukan push langsung ke branch `main`.
- Menggunakan Pull Request sebelum merge.
- Memberikan pesan commit yang jelas.

---

# Format Commit

Gunakan format berikut:

feat: menambah fitur baru

fix: memperbaiki bug

docs: perubahan dokumentasi

style: perubahan tampilan tanpa mengubah logika

refactor: merapikan kode

chore: konfigurasi atau setup project

Contoh:

feat: CRUD Berita

fix: upload gambar berita

docs: update database

---

# Komunikasi

Jika terdapat perubahan:

- Database
- Migration
- Route
- Struktur folder

Maka wajib diinformasikan kepada seluruh anggota tim sebelum melakukan merge.

---

# Catatan

Dokumen ini dapat diperbarui apabila terdapat perubahan pembagian tugas selama proses pengembangan.