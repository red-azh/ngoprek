@extends('template.dashboard')
@section('konten')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($langganan as $item)

            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->umur}}</td>
                <td>{{$item->rating}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
