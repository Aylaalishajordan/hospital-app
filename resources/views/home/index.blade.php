@extends('layout')

@section('content')    

@if ($message = Session::get('success'))
<div class="alert alert-success d-flex justify-content-center" width="15" height="10" role="alert">
     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
     <div>
        {{$message}}
     </div>
</div>
@endif

@if ($message = Session::get('edit'))
<div class="alert alert-primary d-flex justify-content-center" width="15" height="10" role="alert">
     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
     <div>
        {{$message}}
     </div>
</div>
@endif

@if ($message = Session::get('delete'))
<div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
     <div>
        {{$message}}
     </div>
</div>
@endif

<!-- @if ($message = Session::get('fial'))
<div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
     <div>
        {{$message}}
     </div>
</div>
@endif -->

@if(session('fail'))
<div class="alert alert-danger my-3">
     {{session('fail')}}
</div>
@endif

@if($errors->any())
                <ul>
                  @foreach($errors->all() as $err)
                  <li>{{$err}}</li>
                  @endforeach
                </ul>
                @endif

<!-- @error ('fail')
     <div class="container text-danger fs-6">
          {{ $message }}
     </div>
@enderror -->

<div class="container">
                    <main class="form-register input">
                        <div class="card shadow p-5 bg-info bg-opacity-25">
                        <form action="{{ route('store') }}" method="post">
                           @csrf
                           @method('POST')
                            <h1 class="h3 mb-3 fw-normal text-center">Rumah Sakit</h1>
                              @error ('nama')
                                   <div class="container text-danger fs-6">
                                        {{ $message }}
                                   </div>
                              @enderror
                              <div class="form-floating">
                                <input type="text" name="nama" class="form-control mt-2" id="nama" placeholder="masukan">
                                <label for="nama">Nama</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" name="umur" class="form-control mt-2" id="umur" placeholder="umur">
                                <label for="umur">Umur</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" name="alamat" class="form-control mt-2" id="alamat" placeholder="alamat">
                                <label for="alamat">Alamat</label>
                              </div>
                              <div class="form-floating mb-3 mt-3">
                                   <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="dokter">
                                        <option value="Dokter umum">Dokter umum</option>
                                        <option value="Dokter gigi">Dokter gigi</option>
                                        <option value="Dokter saraf">Dokter saraf</option>
                                        <option value="Dokter penyakit dalam">Dokter penyakit dalam</option>
                                        <option value="Dokter kandungan">Dokter kandungan</option>
                                        <option value="Dokter anak">Dokter anak</option>
                                        <option value="Dokter bedah">Dokter bedah</option>
                                        <option value="Dokter kulit">Dokter kulit</option>
                                        <option value="Dokter THT">Dokter THT</option>
                                        <option value="Dokter mata">Dokter mata</option>
                                   </select>
                                   <label for="floatingSelect">Dokter</label>
                              </div>
                            <div class="row justify-content-center">
                              <button class="w-50 btn btn-lg btn-secondary mt-4" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    </main>
                </div>
<div class="tabel">
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    </div>
                    <table class="table-bordered table table-striped text-center">
                        <tr class="table-primaryc">
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>dokter</th>
                            <th>-</th>
                        </tr>
                        @foreach($hospital as $dt)
                        <tr> 
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->umur}}</td>
                        <td>{{$dt->alamat}}</td>
                        <td>{{$dt->dokter}}</td>
                        <td>
                        <form action="{{route('destroy', $dt->id) }}" method="post">
                                <a class="btn btn-secondary" href="{{route('edit', $dt->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection