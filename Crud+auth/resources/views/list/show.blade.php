@extends('master.app')

@section('konten')
<div class="container">
    <a href="{{route('list.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
    <div class="row">
        <div class="col-md-7 ">
            <img src="{{asset('storage/'. $list->foto)}}" width="600px" class="rounded mt-3" alt="">
        </div>
        <div class="col-md-5">
            <table class="table mt-5">

                <tr>
                    <th>Nama Siswa :</th>
                    <td>{{$list->nama}}</td>
                </tr>
                <tr>
                    <th>Umur :</th>
                    <td>{{$list->umur}}</td>
                </tr>
                <tr>
                    <th>Asal Sekolah :</th>
                    <td>{{$list->asal_sekolah}}</td>
                </tr>
                <tr>
                    <th>Jurusan :</th>
                    <td>{{$list->jurusan_id}}</td>
                </tr>
                <tr>
                    <th>Dibuat :</th>
                    <td>{{$list->created_at}}</td>
                </tr>
                <tr>
                    <th>Diperbarui :</th>
                    <td>{{$list->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection