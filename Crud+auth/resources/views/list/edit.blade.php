@extends('master.app')
@section('konten')
<a href="{{route('list.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
<form class="forms-sample" action="{{route('list.update', $list->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Nama Siswa</label>
        <input type="text" class="form-control" value="{{$list->nama}}" name="nama" id="exampleInputName1" @error('nama') is-invalid @enderror
            placeholder="Name">
        @error('nama')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Umur Siswa</label>
        <input type="number" class="form-control" value="{{$list->umur}}" @error('umur') is-invalid @enderror name="umur" id="exampleInputName1"
            placeholder="Name">
        @error('umur')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleSelectGender">Jurusan</label>
        <select class="form-control" name="jurusan" value="{{$list->jurusan_id}}" id="exampleSelectGender" @error('jurusan') is-invalid @enderror>
            @foreach ($jurusan as $item)
            <option value="{{$item->id}}" selected>{{$item->nama_jurusan}}</option>
            @endforeach
        </select>
        @error('jurusan')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="image" required @error('image') is-invalid
                @enderror>
            <label class="custom-file-label" for="image">Choose file...</label>
        </div>
        @error('image')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>Asal Sekolah</label>
        <input type="text" value="{{$list->asal_sekolah}}" class="form-control" @error('asal_sekolah') is-invalid @enderror name="asal_sekolah"
            placeholder="Location">
        @error('asal_sekolah')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>
@endsection
