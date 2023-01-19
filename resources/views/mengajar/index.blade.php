@extends('main.layout')
@section('content')

    <center>
        <b>
            <h2>LIST DATA MENGAJAR</h2>
            <a href="/mengajar/create" class="button-primary">Tambah Data Mengajar</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="5">
                <tr>
                    <th>NO</th>
                    <th>GURU</th>
                    <th>MAPEL</th>
                    <th>KELAS</th>
                    <th>ACTION</th>
                </tr>

                @foreach ($mengajar as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->guru->nama_guru }}</td>
                        <td>{{ $m->mapel->nama_mapel }}</td>
                        <td>{{ $m->kelas->nama_kelas }}</td>
                        <td>
                            <a href="/mengajar/edit/{{ $m->id }}" class="button-warning">EDIT</a>
                            <a href="/mengajar/destroy/{{ $m->id }}" onclick="return confirm('Yakin hapus data?')" class="button-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            </b>
    </center>
@endsection