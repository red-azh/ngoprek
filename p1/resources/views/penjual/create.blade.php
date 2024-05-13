@extends('template.dashboard')

@section('konten')
<div class="bg-secondary rounded h-100 p-4">
    <div class="d-flex justify-content-between">

        <h6 class="mb-4">Tambah Penjual</h6>
        <button class="btn btn-warning"><i class="fa fa-arrow-left me-2"></i> Kembali
        </div>
    </button>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Masukan Umur</label>
            <input type="number" class="form-control" name="umur" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rating</label>
            <input type="number" class="form-control" name="umur" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Tambah <i class="fa fa-plus-circle"></i></button>
    </form>
</div>
@endsection
