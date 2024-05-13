@extends('master.app')
@section('konten')
{{-- <form action="{{ route('berita.index') }}">
    <div class="d-flex">
        <input type="text" class="form-control" name="search" placeholder="Search">
        <button type="submit" class="btn btn-success">
            Cari
        </button>
    </div>
</form> --}}
<a href="{{route('berita.create')}}" class="btn btn-success">tambah</a>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>No</th>
            <th>Judul Berita</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th></th>
        </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($berita as $item)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$item->judul}}</td>
            <td>{{ strlen($item->deskripsi) > 100 ? substr($item->deskripsi, 0, 100) . '...' : $item->deskripsi }}</td>
            <td>{{$item->kategori_id}}</td>
            <td class="d-flex">
                <a href="{{route('berita.edit', $item->id)}}" class="btn btn-warning me-2">Edit</a>
                <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin nih?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
