# 📁 Folder Structure

## Project

SMKN11 Landing Page

---

# Struktur Utama

```text
smkn11landingpage/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── docs/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
│
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── package.json
└── README.md
```

---

# app/

Berisi kode utama aplikasi Laravel.

```text
app/
├── Http/
├── Models/
└── Providers/
```

---

# app/Http/Controllers

Berisi Controller.

```text
app/Http/Controllers/
│
├── Admin/
│   ├── DashboardController.php
│   ├── JurusanController.php
│   ├── TeacherController.php
│   ├── NewsController.php
│   ├── GalleryController.php
│   ├── SliderController.php
│   └── ProfileController.php
│
└── Controller.php
```

---

# app/Models

Berisi Model.

```text
app/Models/
│
├── User.php
├── Profile.php
├── Jurusan.php
├── Teacher.php
├── News.php
├── Gallery.php
├── Slider.php
├── Extracurricular.php
└── Contact.php
```

---

# database/

Berisi migration, factory, dan seeder.

```text
database/
│
├── factories/
├── migrations/
└── seeders/
```

---

# resources/views

Berisi halaman Blade.

```text
resources/views/
│
├── admin/
│   ├── layouts/
│   ├── dashboard/
│   ├── jurusan/
│   ├── teacher/
│   ├── news/
│   ├── gallery/
│   ├── slider/
│   ├── profile/
│   └── contact/
│
├── frontend/
│   ├── layouts/
│   ├── home.blade.php
│   ├── profile.blade.php
│   ├── jurusan.blade.php
│   ├── berita.blade.php
│   ├── galeri.blade.php
│   └── kontak.blade.php
│
└── components/
```

---

# routes/

Berisi route aplikasi.

```text
routes/
│
├── web.php
├── console.php
└── auth.php
```

---

# public/

Berisi file yang dapat diakses secara publik.

```text
public/
│
├── assets/
├── css/
├── js/
└── images/
```

---

# storage/

Digunakan untuk menyimpan file upload.

Contoh:

```text
storage/app/public/
│
├── jurusan/
├── guru/
├── berita/
├── galeri/
└── slider/
```

---

# docs/

Berisi dokumentasi project.

```text
docs/
│
├── 01_PROJECT.md
├── 02_TEAM.md
├── 03_DATABASE.md
├── 04_GIT_WORKFLOW.md
├── 05_CODING_STANDARD.md
├── 06_TODO.md
├── 07_CHANGELOG.md
└── 08_FOLDER_STRUCTURE.md
```

---

# Aturan Struktur Folder

- Controller admin disimpan di `app/Http/Controllers/Admin/`.
- Model disimpan di `app/Models/`.
- Migration disimpan di `database/migrations/`.
- Seeder disimpan di `database/seeders/`.
- View admin disimpan di `resources/views/admin/`.
- View frontend disimpan di `resources/views/frontend/`.
- Dokumentasi disimpan di `docs/`.
