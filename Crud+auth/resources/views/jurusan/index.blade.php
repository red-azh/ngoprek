@extends('master.app')
@section('konten')
<h4 class="card-title">Basic Table</h4>
<a href="{{route('jurusan.create')}}" class="btn btn-success"><i class="fa-solid fa-plus-circle me-2"></i> Add</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>nama jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
            @endphp
            @foreach ($jurusan as $item)

            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nama_jurusan}}</td>
                <td class="d-flex">
                    <a href="{{route('jurusan.edit', $item->id)}}" class="btn btn-warning mx-2"><i
                            class="fa fa-pencil"></i></a>
                    <form action="{{route('jurusan.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger "><i
                                class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
