# 🔀 Git Workflow

## Project

SMKN11 Landing Page

---

# Tujuan

Dokumen ini berisi aturan penggunaan Git dan GitHub dalam pengembangan project.

Tujuannya:

- Menghindari konflik kode.
- Menjaga branch `main` tetap stabil.
- Memisahkan pekerjaan setiap anggota.
- Memudahkan proses review kode.

---

# Struktur Branch

```text
main
│
└── develop
    │
    ├── feature/auth
    ├── feature/master-data
    ├── feature/content
    └── feature/profile
```

---

# Penjelasan Branch

## main

Branch utama untuk versi project yang stabil.

❌ Tidak boleh melakukan coding langsung di branch `main`.

---

## develop

Branch utama untuk menggabungkan seluruh fitur yang sedang dikembangkan.

Semua Pull Request fitur diarahkan ke branch `develop`.

---

## feature

Branch untuk mengerjakan fitur tertentu.

Contoh:

```text
feature/auth
feature/master-data
feature/content
feature/profile
```

---

# Setup Awal Project

Clone repository:

```bash
git clone https://github.com/goonersmania11/smkn11landingpage.git
```

Masuk ke folder project:

```bash
cd smkn11landingpage
```

Install dependency:

```bash
composer install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

# Membuat Branch Develop

Jika branch `develop` belum ada:

```bash
git checkout -b develop
```

Push branch:

```bash
git push -u origin develop
```

---

# Memulai Pekerjaan

Sebelum mulai coding:

```bash
git checkout develop
git pull origin develop
```

Buat branch fitur:

```bash
git checkout -b feature/nama-fitur
```

Contoh:

```bash
git checkout -b feature/master-data
```

---

# Selama Coding

Cek perubahan:

```bash
git status
```

Tambahkan file:

```bash
git add .
```

Commit:

```bash
git commit -m "feat: add CRUD jurusan"
```

Push:

```bash
git push origin feature/master-data
```

---

# Format Commit

## feat

Untuk menambahkan fitur baru.

```text
feat: add CRUD jurusan
```

---

## fix

Untuk memperbaiki bug.

```text
fix: fix validation berita
```

---

## docs

Untuk perubahan dokumentasi.

```text
docs: update database documentation
```

---

## style

Untuk perubahan tampilan atau format kode tanpa mengubah fungsi.

```text
style: improve dashboard layout
```

---

## refactor

Untuk merapikan struktur kode tanpa mengubah fungsi.

```text
refactor: simplify berita controller
```

---

## chore

Untuk konfigurasi atau perubahan teknis.

```text
chore: setup Laravel project
```

---

# Pull Request

Setelah fitur selesai:

1. Push branch ke GitHub.
2. Buka repository GitHub.
3. Buat Pull Request.
4. Targetkan branch `develop`.
5. Jelaskan perubahan.
6. Tunggu review.
7. Setelah disetujui, lakukan merge.

---

# Contoh Pull Request

```text
Title:
feat: add CRUD Jurusan

Description:

## Perubahan
- Menambahkan JurusanController
- Menambahkan model Jurusan
- Menambahkan halaman CRUD Jurusan
- Menambahkan validasi data

## Testing
- [x] Create
- [x] Read
- [x] Update
- [x] Delete
```

---

# Sebelum Membuat Pull Request

Pastikan:

- [ ] Fitur sudah selesai.
- [ ] Tidak ada error.
- [ ] Tidak mengubah fitur anggota lain.
- [ ] Sudah melakukan testing.
- [ ] Commit menggunakan format yang benar.
- [ ] Branch sudah di-push ke GitHub.

---

# Aturan Penting

## Jangan Push Langsung ke Main

❌ Jangan:

```bash
git push origin main
```

Kecuali untuk proses release yang sudah disepakati.

---

## Selalu Pull Sebelum Coding

```bash
git checkout develop
git pull origin develop
```

---

## Jangan Mengedit File yang Sama Bersamaan

Contoh yang harus dihindari:

```text
Orang 1 → routes/web.php
Orang 2 → routes/web.php
Orang 3 → routes/web.php
```

Jika memungkinkan, perubahan pada file yang sama harus dikoordinasikan terlebih dahulu.

---

# Alur Lengkap

```text
1. git checkout develop
2. git pull origin develop
3. git checkout -b feature/nama-fitur
4. Coding
5. Testing
6. git add .
7. git commit
8. git push
9. Pull Request
10. Code Review
11. Merge ke develop
```

---

# Penyelesaian Fitur

Setelah fitur selesai dan sudah di-merge:

```bash
git checkout develop
git pull origin develop
```

Untuk fitur berikutnya, buat branch baru.
