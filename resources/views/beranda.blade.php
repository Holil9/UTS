<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">daftar bunga</h1>

    <div class="container">
    <a href="/utama" class="btn btn-warning">kembali</button>
    <a href="/tambahbunga" class="btn btn-success">Tambah +</a>
        <div class="row">
        @if($message = Session::get('succes'))
            <div class="alert alert-success" role="alert">
            {{ $message }}
</div>
        @endif
        <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">foto</th> 
            <th scope="col">nama</th>
            <th scope="col">jumlah</th>
            <th scope="col">dimasukan</th>
            <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php
            $no = 1;
            @endphp
            @foreach($data as $row)
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>
              <img src="{{ asset('fotobunga/'.$row->foto) }}" alt="" style="width: 40px;">
            </td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jumlah }}</td>
            <td>{{ $row->created_at->format('D M Y') }}</td>
            <td>
            <a href="/edittampil/{{ $row->id }}" class="btn btn-info">Edit</a>
            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>