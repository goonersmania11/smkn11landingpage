# 💻 Coding Standard

## Project

SMKN11 Landing Page

---

# Tujuan

Dokumen ini berisi standar penulisan kode yang digunakan oleh seluruh anggota tim.

Tujuannya:

- Membuat kode lebih konsisten.
- Memudahkan pembacaan kode.
- Memudahkan maintenance.
- Mengurangi kesalahan penamaan file dan class.

---

# 1. Penamaan Model

Model menggunakan format **PascalCase** dan nama singular.

Contoh:

```text
User.php
Profile.php
Jurusan.php
Teacher.php
News.php
Gallery.php
Slider.php
Extracurricular.php
Contact.php
```

Contoh class:

```php
class Jurusan extends Model
{
    //
}
```

---

# 2. Penamaan Controller

Controller menggunakan format **PascalCase** dan diakhiri dengan `Controller`.

Contoh:

```text
JurusanController.php
TeacherController.php
NewsController.php
GalleryController.php
```

Contoh:

```php
class JurusanController extends Controller
{
    //
}
```

---

# 3. Penamaan Migration

Nama migration menggunakan format:

```text
create_nama_table
```

Contoh:

```text
create_jurusans_table
create_teachers_table
create_news_table
create_galleries_table
```

Perintah:

```bash
php artisan make:migration create_jurusans_table
```

---

# 4. Penamaan Database

Nama tabel menggunakan format **snake_case** dan bentuk plural.

Contoh:

```text
users
profiles
jurusans
teachers
news
galleries
sliders
extracurriculars
contacts
```

Nama kolom:

```text
nama
email
created_at
updated_at
published_at
```

---

# 5. Penamaan Route

Gunakan nama route yang jelas.

Contoh:

```php
Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('admin.jurusan.index');
```

Format:

```text
admin.nama_modul.aksi
```

Contoh:

```text
admin.jurusan.index
admin.jurusan.create
admin.jurusan.store
admin.jurusan.edit
admin.jurusan.update
admin.jurusan.destroy
```

---

# 6. Resource Controller

Untuk CRUD gunakan Resource Controller.

Buat dengan:

```bash
php artisan make:controller Admin/JurusanController --resource
```

Method standar:

```text
index
create
store
show
edit
update
destroy
```

---

# 7. Struktur Controller

Contoh:

```php
public function index()
{
    $jurusans = Jurusan::latest()->paginate(10);

    return view('admin.jurusan.index', compact('jurusans'));
}
```

---

# 8. Validasi

Validasi harus dilakukan sebelum menyimpan data.

Contoh:

```php
$request->validate([
    'nama' => 'required|max:255',
    'deskripsi' => 'required',
]);
```

Untuk validasi yang kompleks, gunakan Form Request.

Contoh:

```bash
php artisan make:request StoreJurusanRequest
```

---

# 9. Struktur View

View admin menggunakan struktur:

```text
resources/views/admin/
```

Contoh:

```text
resources/views/admin/jurusan/
├── index.blade.php
├── create.blade.php
└── edit.blade.php
```

---

# 10. Penamaan View

Gunakan huruf kecil.

Benar:

```text
index.blade.php
create.blade.php
edit.blade.php
```

Hindari:

```text
Index.blade.php
CreateJurusan.blade.php
```

---

# 11. Struktur Folder Controller

Controller admin disimpan di:

```text
app/Http/Controllers/Admin/
```

Contoh:

```text
app/Http/Controllers/Admin/
├── DashboardController.php
├── JurusanController.php
├── TeacherController.php
├── NewsController.php
└── GalleryController.php
```

---

# 12. Struktur Model

Model disimpan di:

```text
app/Models/
```

Contoh:

```text
app/Models/
├── User.php
├── Profile.php
├── Jurusan.php
├── Teacher.php
├── News.php
└── Gallery.php
```

---

# 13. Mass Assignment

Gunakan `$fillable`.

Contoh:

```php
protected $fillable = [
    'nama',
    'deskripsi',
    'gambar',
];
```

Jangan menggunakan:

```php
protected $guarded = [];
```

kecuali sudah disepakati oleh tim.

---

# 14. Upload File

File upload disimpan menggunakan Laravel Storage.

Contoh:

```php
$path = $request->file('gambar')
    ->store('jurusan', 'public');
```

Jalankan:

```bash
php artisan storage:link
```

---

# 15. Penghapusan File

Saat data dihapus, file terkait juga harus dihapus.

Contoh:

```php
if ($jurusan->gambar) {
    Storage::disk('public')->delete($jurusan->gambar);
}
```

---

# 16. Query Database

Gunakan Eloquent.

Contoh:

```php
$jurusans = Jurusan::latest()->get();
```

Untuk pagination:

```php
$jurusans = Jurusan::latest()->paginate(10);
```

---

# 17. Jangan Menggunakan Query Berulang

Hindari:

```php
foreach ($news as $item) {
    $item->user->name;
}
```

Gunakan eager loading:

```php
$news = News::with('user')->get();
```

---

# 18. Komentar Kode

Komentar hanya digunakan jika diperlukan.

Contoh:

```php
// Mengambil berita terbaru untuk halaman dashboard
$news = News::latest()->take(5)->get();
```

Jangan memberi komentar pada kode yang sudah jelas.

---

# 19. Format Kode

Gunakan indentasi 4 spasi.

Contoh:

```php
public function index()
{
    $data = Model::latest()->get();

    return view('admin.index', compact('data'));
}
```

---

# 20. Prinsip Coding

Setiap anggota wajib:

- Menulis kode yang mudah dibaca.
- Menghindari kode duplikat.
- Menggunakan nama variabel yang jelas.
- Melakukan validasi input.
- Tidak menyimpan password dalam bentuk plain text.
- Tidak menyimpan file `.env` ke GitHub.
- Tidak menulis kode yang tidak diperlukan.

---

# Checklist Sebelum Commit

- [ ] Kode dapat dijalankan.
- [ ] Tidak ada error.
- [ ] Validasi sudah dibuat.
- [ ] File berada di folder yang benar.
- [ ] Penamaan sudah sesuai standar.
- [ ] Tidak ada data sensitif.
- [ ] Tidak ada file `.env`.
- [ ] Sudah melakukan testing.
