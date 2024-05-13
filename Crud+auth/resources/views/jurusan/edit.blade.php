@extends('master.app')
@section('konten')
<form class="forms-sample" action="{{route('jurusan.update', $jurusan->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="namjur">Nama Jurusan</label>
        <input type="text" class="form-control" value="{{$jurusan->nama_jurusan}}" name="jurusan" id="namjur" placeholder="Jurusan.." @error('jurusan')
            is-invalid @enderror>
        @error('jurusan')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mr-2"><i class="fa-solid fa-paper-plane"></i></button>
</form>
@endsection
