# 🗄️ Database Documentation

## Project

SMKN11 Landing Page

## Database

MySQL

---

# 1. users

Digunakan untuk menyimpan data pengguna sistem admin.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| name | VARCHAR | Nama user |
| email | VARCHAR | Email login |
| password | VARCHAR | Password terenkripsi |
| role | VARCHAR | Role user |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 2. profiles

Digunakan untuk menyimpan informasi utama sekolah.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| nama_sekolah | VARCHAR | Nama sekolah |
| deskripsi | TEXT | Deskripsi sekolah |
| sejarah | LONGTEXT | Sejarah sekolah |
| visi | TEXT | Visi sekolah |
| misi | LONGTEXT | Misi sekolah |
| sambutan | LONGTEXT | Sambutan kepala sekolah |
| nama_kepala_sekolah | VARCHAR | Nama kepala sekolah |
| foto_kepala_sekolah | VARCHAR | Foto kepala sekolah |
| alamat | TEXT | Alamat sekolah |
| telepon | VARCHAR | Nomor telepon |
| email | VARCHAR | Email sekolah |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 3. jurusans

Digunakan untuk menyimpan data program keahlian sekolah.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| nama | VARCHAR | Nama jurusan |
| slug | VARCHAR | URL unik |
| deskripsi | LONGTEXT | Deskripsi jurusan |
| gambar | VARCHAR | Gambar jurusan |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 4. teachers

Digunakan untuk menyimpan data guru.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| nama | VARCHAR | Nama guru |
| nip | VARCHAR | Nomor induk pegawai |
| jabatan | VARCHAR | Jabatan |
| foto | VARCHAR | Foto guru |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 5. news

Digunakan untuk menyimpan berita sekolah.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| user_id | BIGINT | User pembuat berita |
| judul | VARCHAR | Judul berita |
| slug | VARCHAR | URL berita |
| isi | LONGTEXT | Isi berita |
| thumbnail | VARCHAR | Gambar berita |
| status | VARCHAR | Status berita |
| published_at | TIMESTAMP | Waktu publikasi |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

### Relasi

```text
users 1 ---- N news
```

Satu user dapat membuat banyak berita.

---

# 6. galleries

Digunakan untuk menyimpan foto kegiatan sekolah.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| judul | VARCHAR | Judul galeri |
| deskripsi | TEXT | Deskripsi |
| gambar | VARCHAR | File gambar |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 7. sliders

Digunakan untuk menyimpan banner pada halaman utama.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| judul | VARCHAR | Judul slider |
| deskripsi | TEXT | Deskripsi |
| gambar | VARCHAR | Gambar slider |
| link | VARCHAR | Link tujuan |
| status | BOOLEAN | Status aktif |
| urutan | INTEGER | Urutan tampil |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 8. extracurriculars

Digunakan untuk menyimpan data ekstrakurikuler.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| nama | VARCHAR | Nama ekstrakurikuler |
| slug | VARCHAR | URL unik |
| deskripsi | LONGTEXT | Deskripsi |
| gambar | VARCHAR | Gambar |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# 9. contacts

Digunakan untuk menyimpan pesan dari pengunjung.

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| nama | VARCHAR | Nama pengirim |
| email | VARCHAR | Email pengirim |
| subjek | VARCHAR | Subjek pesan |
| pesan | LONGTEXT | Isi pesan |
| status | VARCHAR | Status pesan |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diperbarui |

---

# ERD Sederhana

```text
┌─────────────┐
│    users    │
└──────┬──────┘
       │
       │ 1:N
       │
┌──────▼──────┐
│    news     │
└─────────────┘


┌─────────────┐
│  profiles   │
└─────────────┘


┌─────────────┐
│  jurusans   │
└─────────────┘


┌─────────────┐
│  teachers   │
└─────────────┘


┌─────────────┐
│  galleries  │
└─────────────┘


┌─────────────┐
│   sliders   │
└─────────────┘


┌─────────────┐
│extracurriculars│
└─────────────┘


┌─────────────┐
│  contacts   │
└─────────────┘
```

---

# Urutan Migration

Migration disarankan dibuat dengan urutan:

1. users
2. profiles
3. jurusans
4. teachers
5. news
6. galleries
7. sliders
8. extracurriculars
9. contacts

---

# Catatan Database

- Semua tabel menggunakan `id` sebagai primary key.
- Semua tabel menggunakan `created_at` dan `updated_at`.
- Kolom gambar menyimpan path file, bukan file gambar secara langsung.
- File gambar disimpan pada storage Laravel.
- Slug digunakan untuk URL yang lebih SEO-friendly.
- Data berita memiliki relasi dengan user.