@extends('layout')

@section('konten')
  @yield('konten')

  <h4 class="mt-4 mb-4 text-center text-primary">Tambah Kursus</h4>

  <form action="{{ Route('peserta.submit') }}" method="post" class="p-4 border rounded shadow-sm bg-light">
      @csrf
      <div class="form-group mb-3">
          <label for="judul" class="font-weight-bold">Judul</label>
          <input type="text" id="judul" name="judul" class="form-control border-info rounded" placeholder="Masukkan judul kursus">
      </div>
      
      <div class="form-group mb-3">
          <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
          <input type="text" id="deskripsi" name="deskripsi" class="form-control border-info rounded" placeholder="Masukkan deskripsi kursus">
      </div>
      
      <div class="form-group mb-3">
          <label for="durasi" class="font-weight-bold">Durasi</label>
          <input type="text" id="durasi" name="durasi" class="form-control border-info rounded" placeholder="Masukkan durasi kursus">
      </div>
      
      <button type="submit" class="btn btn-primary btn-block">Tambah</button>
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
