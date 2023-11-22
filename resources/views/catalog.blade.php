<!-- catalog.blade.php -->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center mb-4">Daftar Bunga</h1>

  <div class="container">
    <a href="/utama" class="btn btn-warning mb-3">Kembali</a>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($data as $row)
      <div class="col">
        <div class="card">
          <img src="{{ asset('fotobunga/'.$row->foto) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $row->nama }}</h5>
            <p class="card-text">Jumlah: {{ $row->jumlah }}</p>
            <p class="card-text">Dimasukkan: {{ $row->created_at->format('D M Y') }}</p>
            <div class="d-grid gap-2">
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
