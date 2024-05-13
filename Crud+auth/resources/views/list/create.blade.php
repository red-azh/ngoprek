@extends('master.app')
@section('konten')
<a href="{{route('list.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
<form class="forms-sample" action="{{route('list.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Nama Siswa</label>
        <input type="text" class="form-control" name="nama" id="exampleInputName1" @error('nama') is-invalid @enderror
            placeholder="Name">
        @error('nama')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputName1">Umur Siswa</label>
        <input type="number" class="form-control" @error('umur') is-invalid @enderror name="umur" id="exampleInputName1"
            placeholder="Name">
        @error('umur')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleSelectGender">Jurusan</label>
        <select class="form-control" name="jurusan" id="exampleSelectGender" @error('jurusan') is-invalid @enderror>
            @foreach ($list as $item)
            <option value="{{$item->id}}" selected>{{$item->nama_jurusan}}</option>
            @endforeach
        </select>
        @error('jurusan')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <div class="custom-file">
            <img class="img-preview img-fluid">
            <input type="file" name="image" class="custom-file-input" id="image" required @error('image') is-invalid
                @enderror onchange="previewImage()">
            <label class="custom-file-label" for="image">Choose file...</label>
        </div>
        @error('image')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>Asal Sekolah</label>
        <input type="text" class="form-control" @error('asal_sekolah') is-invalid @enderror name="asal_sekolah"
            placeholder="Location">
        @error('asal_sekolah')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>

{{--
nampilin gambar (preview gambar)
<script>
    function previewImage () {

        const image= document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.sytle.display = "block";
        const ofReader = newFileReader();
        ofReader.readAsDataURL(image.files[0])

        ofReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script> --}}

@endsection