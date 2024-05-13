@extends('master.app')
@section('konten')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Form</h6>
        <form action="{{route('berita.update', $berita->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul berita </label>
                <input type="text" value="{{old('judul', $berita->judul)}}" name="judul" class="form-control"
                    @error('judul') is-invalid @enderror>
                @error('judul')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi berita</label>
                <textarea name="deskripsi" class="form-control" @error('deskripsi') is-invalid @enderror id="" cols="20"
                    rows="10">{{old('deskripsi',$berita->deskripsi)}}</textarea>
                @error('deskripsi')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id" @error('kategori_id') is-invalid @enderror>
                    <option selected hidden>-----</option>
                    @foreach ($kategori as $item)
                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                    @endforeach
                </select>
                @error('kategori_id')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Updated</button>
        </form>
    </div>
</div>
@endsection