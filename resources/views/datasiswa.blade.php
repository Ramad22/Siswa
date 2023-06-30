<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    
    
  </head>
  <body><br>
    <center><h3>DATA SISWA</h3></center>

    <div class="container">
      <a href="/tambahsiswa" class="btn btn-success mb-2">+Tambah</a>
      <a style="float: right; height:100%;" href="{{route('logout')}}" class="btn btn-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
      </a>
      <h6 style="text-transform: capitalize; float:right; color:black;" href="#" class="d-block my-2">{{Auth::user()->name}}</h6>
      
      <div class="col-auto">
      <form action="/siswa" method="GET">
        <input type="search" name="search" class="form-cotrol" placeholder="">
        <button class="btn btn-light" type="submit">Search...</button>
      </div>
      </form>
        {{-- <div class="row"> --}}
          {{-- @if($message = Session::get('p'))
          <div class="alert alert-dark" role="alert">
                {{$message}}
          </div>
          @endif --}}
          
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">DIBUAT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                      $no = 1;
                  @endphp
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$item->nama}}</td>
                        <td> 
                          <img src="{{asset('fotosiswa/'.$item->gambar)}}" alt="" style="width: 43px">
                        </td>
                        <td>{{$item->jeniskelamin}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="#"  class="btn btn-danger deletebtn" data-id="{{ $item->id }}" data-nama="{{$item->nama}}">Hapus</a>
                            <a href="/tampilkandata/{{$item->id}}" class="btn btn-primary">Edit</a>
                        </td>
                      </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
             {{ $data->links()}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  </body>
  
    <script>
       $('.deletebtn').click(function(){
           var siswaid = $(this).attr('data-id');
           var nama = $(this).attr('data-nama');
            swal({
            title: "Want to delete?",
            text: "you delete for no "+siswaid+" ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = "/delete/"+siswaid+""
              swal("Succes for Delete", {
                icon: "success",
              });
            } else {
              swal("Un Succes for Delete");
            }
          });
       });
    </script>

    <script>
    @if (Session::has('p'))
    toastr.success("{{ Session::get('p')}}")
    @endif
    </script>
    

</html>