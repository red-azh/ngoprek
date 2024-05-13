@extends('master.app')
@section('konten')
<h4 class="card-title">Basic Table</h4>
<a href="{{route('list.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus-circle"></i></a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto siswa</th>
                <th>Nama Siswa</th>
                <th>Umur</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th>Action </th>
            </tr>
        </thead>
        @php
        $no = 1;
        @endphp
        <tbody>
            @foreach ($list as $item)

            <tr>
                <td>{{$no++}}</td>
                <td><img src="{{asset('storage/'. $item->foto)}}" alt=""></td>
                <td>{{$item->nama}}</td>
                <td>{{$item->umur}}</td>
                <td>{{$item->asal_sekolah}}</td>
                <td>{{$item->jurus->nama_jurusan}}</td>
                <td class="d-flex">
                    <a href="{{route('list.show', $item->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('list.edit', $item->id)}}" class="btn btn-warning mx-2"><i
                            class="fa fa-pencil"></i></a>

                    <a href="{{route('delete',$item->id)}}" class="btn btn-danger "><i
                            class="fa-solid fa-trash"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection