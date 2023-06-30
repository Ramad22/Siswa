<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body><br>
    <center><h3> Edit DATA SISWA</h3></center>
    <br>
    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-5">
          <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($pesan = Session::get('p'))
            <div class="alert alert-primary" role="alert">
                    {{$pesan}}
            </div>
            @endif
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><b>NAMA</b></label>
              <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"><b>JENIS KELAMIN</b></label>
              <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                <option selected>{{$data->jeniskelamin}}</option>
                <option value="cowo">Cowo</option>
                <option value="cewe">Cewe</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"><b>JURUSAN</b></label>
              <input type="text" name="jurusan" value="{{$data->jurusan}}" class="form-control" "exampleInputPassword1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"><b>GAMBAR</b></label>
              <input type="file" name="gambar" value="{{$data->gambar}}" class="form-control" "exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-primary" a href="/siswa">SUBMIT</button>
          </form>
         </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>