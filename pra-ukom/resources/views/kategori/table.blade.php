@extends('master.app')
@section('konten')
<a href="{{route('kategori.create')}}" class="btn btn-success">tambah data</a>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th></th>
        </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($kategori as $item)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nama_kategori}}</td>
            <td class="d-flex">
                <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-warning me-2">Edit</a>
                <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
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