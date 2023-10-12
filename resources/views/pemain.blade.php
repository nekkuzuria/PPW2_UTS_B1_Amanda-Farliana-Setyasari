@extends('master')

@section('content')
    <h1>Data Pemain</h1>

    <table style="border: 1px; width: 50%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No_Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemains as $pemain)
                <tr style="text-align: center;">
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
