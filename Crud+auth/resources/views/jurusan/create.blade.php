@extends('master.app')
@section('konten')
<form class="forms-sample" action="{{route('jurusan.store')}}" method="post">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="namjur">Nama Jurusan</label>
        <input type="text" class="form-control" name="jurusan" id="namjur" placeholder="Jurusan.." @error('jurusan')
            is-invalid @enderror>
        @error('jurusan')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mr-2"><i class="fa-solid fa-paper-plane"></i></button>
</form>
@endsection
