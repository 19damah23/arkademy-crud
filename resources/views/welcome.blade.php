<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body">
        <div class="container pt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route("createProduk") }}">+ Tambah Produk</a></li>
                </ol>
            </nav>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($produks as $produk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->keterangan }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->jumlah }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('editProduk', ['id' => $produk->id]) }}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('destroyProduk', ['id' => $produk->id]) }}">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <h1>Tidak ada produk tersedia</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </body>
</html>
