@extends('layout')

@section('konten')
  @yield('konten')
	<div class="d-flex">
        <h4 class="center">Daftar Kursus</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{ route('peserta.tambah')}}">Tambah Kursus</a>
        </div>
    </div>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi Materi</th>
            <th>Link Embed</th>
            <th>Aksi</th>
        </tr>
        @foreach($peserta as $no=>$data)
        <tr>
            <td>{{$no+1}}</td>
            <td>{{$data->judul}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>{{$data->durasi}}</td>
            <td>
                <a href="{{ route('peserta.edit', $data->id)}}" class="btn btn-info btn-sm text-white">
									<i class="fa fa-eye"></i> View
                <a href="{{ route('peserta.edit', $data->id)}}" class="btn btn-sm btn-warning">
                  <i class="fa fa-pencil"></i> Edit </a>
                  <form action="{{route('peserta.delete', $data->id)}}" method="post">
                    @csrf
                    <button class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus materi tersebut?')"> <i class="fa fa-trash"></i> Hapus</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection