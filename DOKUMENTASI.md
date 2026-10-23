# Dokumentasi Website Portofolio - Choirur Ridwan

## Daftar Isi
1. [Penjelasan File CSS](#1-penjelasan-file-css)
2. [Penjelasan File Views](#2-penjelasan-file-views)
3. [Struktur Navigasi](#3-struktur-navigasi)

---

## 1. Penjelasan File CSS

**File:** `public/css/style.css`

File CSS ini menggunakan tema **hitam dan putih** dengan gaya minimalis. Berikut penjelasan tiap bagian:

| Bagian CSS | Fungsi |
|---|---|
| `*` (Reset) | Menghapus margin & padding bawaan browser agar tampilan konsisten |
| `body` | Mengatur background hitam (`#111`), teks putih (`#eee`), lebar maksimal `700px`, dan memusatkan halaman |
| `h1` | Judul utama: huruf kapital, spasi antar huruf, warna putih, rata tengah |
| `h2` | Sub-judul: warna abu (`#ccc`), dengan garis putih di sisi kiri sebagai aksen |
| `hr` | Garis pemisah tipis berwarna abu gelap (`#333`) |
| `nav` | Navigasi rata tengah |
| `nav a` | Link navigasi berwarna abu, tanpa garis bawah, berubah putih saat di-hover |
| `nav a.active` | Link halaman aktif ditandai warna putih + garis bawah |
| `p` | Teks paragraf berwarna abu terang (`#bbb`) |
| `table` | Tabel full-width, border abu gelap, efek hover baris |
| `table td b` | Teks tebal di tabel berwarna putih agar menonjol |
| `ul li` | List tanpa bullet, diganti tanda dash (—) berwarna abu |
| `img` | Gambar: sudut rounded, border abu, filter grayscale (hitam-putih) |
| `footer` | Footer rata tengah, teks kecil berwarna abu gelap |

---

## 2. Penjelasan File Views

### a. `beranda.blade.php` — Halaman Beranda
- **Route:** `/` dan `/beranda`
- **Isi:** Teks selamat datang dan perkenalan singkat
- **Struktur HTML:**
  - `<h1>` → Judul website
  - `<nav>` → Navigasi ke semua halaman (link "Beranda" ditandai `class="active"`)
  - `<h2>` → Sub-judul "Selamat Datang"
  - `<p>` → Paragraf perkenalan
  - `<footer>` → Hak cipta

### b. `datadiri.blade.php` — Halaman Data Diri
- **Route:** `/datadiri`
- **Isi:** Foto profil dan tabel informasi pribadi
- **Struktur HTML:**
  - `<img>` → Foto profil (file `download.jpeg` di folder `public`)
  - `<table>` → Tabel berisi: Nama, NIM, Jurusan, Universitas, Email
  - Link "Data Diri" ditandai `class="active"` di navigasi

### c. `aktivitas.blade.php` — Halaman Aktivitas
- **Route:** `/aktivitas`
- **Isi:** Daftar aktivitas dalam bentuk list
- **Struktur HTML:**
  - `<ul>` + `<li>` → Daftar aktivitas (belajar Laravel, proyek tugas akhir, seminar)
  - Link "Aktivitas" ditandai `class="active"` di navigasi

### d. `kontak.blade.php` — Halaman Kontak
- **Route:** `/kontak`
- **Isi:** Tabel informasi kontak
- **Struktur HTML:**
  - `<p>` → Kalimat ajakan menghubungi
  - `<table>` → Tabel berisi: Email, Telepon, Alamat, Instagram
  - Link "Kontak" ditandai `class="active"` di navigasi

### e. `profile.blade.php` — Halaman Profile (Dinamis)
- **Route:** `/profile`
- **Isi:** Data profil dari controller menggunakan variabel Blade
- **Variabel Blade:**
  - `{{$nama}}` → Menampilkan nama dari controller
  - `{{$bio}}` → Menampilkan bio dari controller
  - `{{$nim}}` → Menampilkan NIM dari controller

---

## 3. Struktur Navigasi

```
Website Saya
├── /beranda     → beranda.blade.php     (Halaman utama)
├── /datadiri    → datadiri.blade.php     (Info pribadi + foto)
├── /aktivitas   → aktivitas.blade.php    (Daftar kegiatan)
├── /kontak      → kontak.blade.php       (Info kontak)
└── /profile     → profile.blade.php      (Profil dari controller)
```

---

## Perubahan yang Dilakukan

| Perubahan | Keterangan |
|---|---|
| Tambah `public/css/style.css` | File CSS baru dengan tema hitam-putih minimalis |
| Tambah `<link>` di semua view | Menghubungkan CSS ke setiap halaman |
| `<a>` → dibungkus `<nav>` | Agar navigasi bisa di-style dari CSS |
| `<p>` footer → `<footer>` | Agar footer bisa di-style terpisah dari paragraf biasa |
| Hapus `align="center"` di `<h1>` | Diganti dengan CSS `text-align: center` |
| Hapus `border="1"` di `<table>` | Diganti dengan CSS `border: 1px solid #333` |
| Tambah `class="active"` | Menandai link halaman yang sedang aktif |
