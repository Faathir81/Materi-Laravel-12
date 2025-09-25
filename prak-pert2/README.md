# Praktikum PBW – Laravel 12

**Pertemuan 1: Setup, Routing, & View Blade**

Halo teman-teman 👋  
Selamat datang di praktikum Pemrograman Berbasis Web menggunakan **Laravel 12**.

---

## 📌 Tugas Mahasiswa

### Judul

**Halaman Profil Sederhana dengan Blade**

### Instruksi

1. Tambahkan route `/profile` di `routes/web.php`.
2. Buat view `resources/views/profile.blade.php`.
3. Gunakan query string `?theme=dark|light` untuk ganti tema.
4. Jalankan dengan `php artisan serve` lalu buka di browser.

---

## 📝 Contoh Kode Starter

### `routes/web.php`

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::get('/hello', fn() => 'Halo Laravel 12! 🎉');

Route::get('/greeting', function () {
    $name = request('name', 'Mahasiswa');
    return view('greeting', ['name' => $name]);
});

// === Tugas: Profil Mahasiswa ===
Route::get('/profile', function () {
    $theme = request('theme', 'light'); // default light
    $data = [
        'name' => 'Nama Mahasiswa',
        'nim' => '12.34.5678',
        'kelas' => 'TI-4B',
        'hobi' => ['Ngoding', 'Desain', 'Gaming'],
        'bio'  => 'Mahasiswa semester 4 yang suka Laravel & UI sederhana.',
        'theme'=> $theme,
    ];
    return view('profile', $data);
});
```

### File: `resources/views/profile.blade.php`

```html
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <title>Profil {{ $name }}</title>
        <style>
            :root {
                --bg: {
                     {
                        $theme=== 'dark' ? '#0f172a' : "#ffffff";
                    }
                }
                --fg: {
                     {
                        $theme=== 'dark' ? '#e2e8f0' : "#0f172a";
                    }
                }
                --muted: {
                     {
                        $theme=== 'dark' ? '#94a3b8' : "#475569";
                    }
                }
            }
            body {
                background: var(--bg);
                color: var(--fg);
                font-family: system-ui, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
                line-height: 1.6;
                max-width: 760px;
                margin: 2rem auto;
                padding: 0 1rem;
            }
            .muted {
                color: var(--muted);
            }
        </style>
    </head>
    <body>
        <h1>{{ $name }} <span class="muted">({{ $nim }})</span></h1>
        <p>Kelas: <strong>{{ $kelas }}</strong></p>
        <p>{{ $bio }}</p>

        <h2>Hobi</h2>
        <ul>
            @foreach ($hobi as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        <!-- TODO: Tampilkan data tambahan (misalnya alamat atau quote favorit) -->

        <p class="muted">
            Tema saat ini: {{ $theme }} → coba tambahkan `?theme=dark` di URL.
        </p>

        <!-- TODO: Tambahkan style untuk theme "blue" -->
    </body>
</html>
```
