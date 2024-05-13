@extends('template.dashboard')
@section('konten')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kopi</th>
                <th>Jenis Kopi</th>
                <th>Harga Kopi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($daftarIsi as $item)

            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nama_kopi}}</td>
                <td>{{$item->jenis_kopi}}</td>
                <td>{{$item->harga_kopi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
