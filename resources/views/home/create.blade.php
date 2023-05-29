@extends('layout')

@section ('content')
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
                        <form action="/store" method="post">
                           @csrf
                              <div class="form-floating">
                                <input type="text" name="nama" class="form-control mt-2" id="nama" placeholder="masukan nama">
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
                              </div>
                            <div class="row justify-content-center">
                              <button type="w-50 btn btn-lg btn-secondary mt-4" class="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    </main>
                </div>
            </div>
        </div>
     </div>
@endsection

