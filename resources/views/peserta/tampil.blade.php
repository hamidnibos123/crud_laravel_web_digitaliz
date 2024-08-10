@extends('layout')

@section('konten')
  @yield('konten')
  
  <!-- Header Daftar Kursus -->
  <div class="d-flex justify-content-between align-items-center mt-2 mb-3">
      <h4 class="fw-bold" style="color: #007bff;">Daftar Kursus</h4>
      <div>
          <a class="btn btn-success btn-sm" href="{{ route('peserta.tambah')}}">
              <i class="fa fa-plus"></i> Tambah Kursus
          </a>
      </div>
  </div>

  <!-- Tabel Kursus -->
  <div class="table-responsive">
      <table class="table table-striped table-bordered align-middle">
          <thead class="table-dark">
              <tr>
                  <th class="text-center">No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Durasi</th>
                  <th class="text-center">Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach($peserta as $no=>$data)
              <tr>
                  <td class="text-center">{{$no+1}}</td>
                  <td>{{$data->judul}}</td>
                  <td>{{$data->deskripsi}}</td>
                  <td>{{$data->durasi}}</td>
                  <td class="text-center">
                    <a href="{{ route('peserta.show', $data->id) }}" class="btn btn-info btn-sm text-white me-2">
                        <i class="fa fa-eye"></i> View
                    </a>
                      <a href="{{ route('peserta.edit', $data->id)}}" class="btn btn-warning btn-sm text-white me-2">
                          <i class="fa fa-pencil"></i> Edit
                      </a>
                      <form action="{{route('peserta.delete', $data->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus materi tersebut?')">
                          @csrf
                          <button class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i> Hapus
                          </button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
@endsection
