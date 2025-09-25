<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Greeting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Segoe UI,Roboto,Helvetica,Arial,sans-serif;line-height:1.6;
         max-width:720px;margin:2rem auto;padding:0 1rem}
    .muted{color:#666}
  </style>
</head>
<body>
  <h1>Halo, {{ $name }} 👋</h1>
  <p class="muted">Ini view Blade pertama Anda.</p>

  @if ($name === 'Mahasiswa')
    <p>Selamat datang di praktikum PBW!</p>
  @else
    <p>Senang bertemu, {{ $name }}!</p>
  @endif
</body>
</html>
