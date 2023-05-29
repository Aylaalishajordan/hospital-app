@extends('layout')
@section ('content')
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                <ul>
                  @foreach($errors->all() as $err)
                  <li>{{$err}}</li>
                  @endforeach
                </ul>
                @endif

                <div class="container">
                    <main class="form-register input">
                        <div class="card shadow p-5 bg-primary bg-opacity-25">
                        <form action="{{route('update',$data->id)}}" method="POST">
                           @csrf
                           @method('PATCH')
                              <div class="form-floating">
                                <input type="text" name="nama" class="form-control mt-2" id="nama" placeholder="masukan nama" value="{{$data->nama}}">
                                <label for="nama">Nama</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" name="umur" class="form-control mt-2" id="umur" placeholder="umur" value="{{$data->umur}}">
                                <label for="umur">Umur</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" name="alamat" class="form-control mt-2" id="alamat" placeholder="alamat" value="{{$data->alamat}}">
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
                              </div>
                            <div class="row justify-content-center">
                              <button class="w-50 btn btn-lg btn-secondary mt-4"> 
                              <a href="{{ route('home') }}"> <a type="submit">submit</a></button>
                            </div>
                            <a href="{{ route('home') }}">Kembali</a>
                        </form>
                    </div>
                    </main>
                </div>
            </div>
        </div>
     </div>
@endsection

