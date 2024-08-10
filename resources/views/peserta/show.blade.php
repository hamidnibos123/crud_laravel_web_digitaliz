@extends('layout')

@section('konten')
  <div class="container mt-4">
    <h4 class="fw-bold text-primary">Detail Peserta</h4>
    
    <div class="card mt-3 p-4">
        <div class="card-body">
            <p><strong>Judul:</strong> {{ $peserta->judul }}</p>
            <p><strong>Deskripsi:</strong> {{ $peserta->deskripsi }}</p>
            <p><strong>Durasi:</strong> {{ $peserta->durasi }}</p>
            
            <!-- Display materi if available -->
            @if($peserta->materi->isNotEmpty())
                <h5 class="mt-4">Materi:</h5>
                <table class="table table-striped mt-2">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Judul Materi</th>
                            <th>Deskripsi Materi</th>
                            <th>Link Embed</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peserta->materi as $index => $material)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $material->title }}</td>
                                <td>{{ $material->description }}</td>
                                <td><a href="{{ $material->embed_link }}" target="_blank">{{ $material->embed_link }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Belum ada materi yang ditambahkan.</p>
            @endif
        </div>
    </div>

    <a href="{{ route('peserta.tampil') }}" class="btn btn-secondary mt-3">Kembali</a>
  </div>
@endsection

@push('styles')
<style>
  .card {
      border-radius: 0.5rem;
  }
  .card-body {
      padding: 1.5rem;
  }
  .table thead th {
      background-color: #343a40;
      color: #ffffff;
  }
  .table tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
  }
  .table tbody tr:hover {
      background-color: #e9ecef;
  }
  .text-primary {
      color: #007bff !important;
  }
  .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
  }
  .btn-secondary:hover {
      background-color: #5a6268;
      border-color: #545b62;
  }
</style>
@endpush
