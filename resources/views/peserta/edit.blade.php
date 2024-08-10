@extends('layout')

@section('konten')
  @yield('konten')

  <h4 class="mt-4 mb-4 text-center text-primary">Edit Kursus</h4>

  <form action="{{ Route('peserta.update', $peserta->id) }}" method="post" class="p-4 border rounded shadow-sm bg-light">
      @csrf

      <div class="form-group mb-3">
          <label for="judul" class="font-weight-bold">Judul</label>
          <input type="text" id="judul" name="judul" value="{{ $peserta->judul }}" class="form-control border-info rounded">
      </div>

      <div class="form-group mb-3">
          <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
          <input type="text" id="deskripsi" name="deskripsi" value="{{ $peserta->deskripsi }}" class="form-control border-info rounded">
      </div>

      <div class="form-group mb-3">
          <label for="durasi" class="font-weight-bold">Durasi</label>
          <input type="text" id="durasi" name="durasi" value="{{ $peserta->durasi }}" class="form-control border-info rounded">
      </div>

      <div class="d-flex justify-content-between">
          <a href="{{ route('peserta.tampil') }}" class="btn btn-danger">
              <i class="fa fa-reply" aria-hidden="true"></i> Batal
          </a>
          <button type="submit" class="btn btn-primary">Edit</button>
      </div>
  </form>
@endsection

@push('styles')
<style>
  .form-control {
      font-size: 16px;
  }
  .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
  }
  .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
  }
  .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
  }
  .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
  }
  .bg-light {
      background-color: #f8f9fa !important;
  }
  .text-primary {
      color: #007bff !important;
  }
  .font-weight-bold {
      font-weight: 700;
  }
</style>
@endpush
