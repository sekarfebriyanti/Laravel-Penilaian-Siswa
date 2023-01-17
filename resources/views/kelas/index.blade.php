@extends('main.layout')
@section('content')

    <center>
        <b>
            <h2>LIST DATA KELAS</h2>
            <a href="/kelas/create" class="button-primary">Tambah Data Kelas</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="5">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>NAMA KELAS</th>
                    <th>JURUSAN</th>
                    <th>ACTION</th>
                </tr>

                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>{{ $k->jurusan_id }}</td>

                        <td>
                            <a href="/mapel/edit/{{ $m->id }}" class="button-warning">EDIT</a>
                            <a href="/mapel/destroy/{{ $m->id }}" onclick="return confirm('Yakin hapus data?')" class="button-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            </b>
    </center>
@endsection