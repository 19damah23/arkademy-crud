<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route("indexProduk") }}">< Kembali</a></li>
            </ol>
        </nav>
        <form action="{{ route($url) }}" method="post">
          @csrf

          <div class="row">
            <input class="form-control" type="hidden" name="id" value="{{ old('', $produk->id ?? '') }}">

            <div class="col-8 offset-2">
              <div class="form-group row">
                <label for="nama_produk" class="col-4 col-form-label">{{ __('Nama Produk') }}</label>

                <div class="col">
                    <input type="text" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk ?? '') }}" required autocomplete="nama_produk" autofocus>

                    @error('nama_produk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="keterangan" class="col-4 col-form-label">{{ __('Keterangan') }}</label>

                <div class="col-6">
                    <input type="text" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $produk->keterangan ?? '') }}" required autocomplete="keterangan" autofocus>

                    @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">{{ __('Harga') }}</label>

                <div class="col-6">
                    <input type="number" id="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $produk->harga ?? '') }}" required autocomplete="harga" autofocus>

                    @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">{{ __('Jumlah') }}</label>

                <div class="col-6">
                    <input type="number" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $produk->jumlah ?? '') }}" required autocomplete="jumlah" autofocus>

                    @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-lg-6 offset-lg-4">
                  <button class="btn btn-primary btn-sm" type="submit">
                    {{ __($button) }}
                  </button>
                </div>
              </div>
            </div>
          </div>
      </form>
      </div>
</body>
</html>
