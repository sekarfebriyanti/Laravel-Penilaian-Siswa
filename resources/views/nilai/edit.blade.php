@extends('main.layout')
@section('content')

    <center>
        <h2>TAMBAH DATA NILAI</h2>
        <form action="/nilai/update/{{ $nilai->id }}" method="post" >
            @csrf
            <table width="50%">
            <tr>
                    <td class="bar">GURU MAPEL</td>
                    <td class="bar">
                        <select name="mengajar_id" id="">
                            <option value=""></option>
                            @foreach ($mengajar as $m)
                                <option value="{{ $m->id }}" @if ($m->id == $nilai->mengajar_id) selected @endif>
                                    {{ $m->mapel->nama_mapel }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">SISWA</td>
                    <td class="bar">
                        <select name="siswa_id" id="">
                            <option value=""></option>
                            @foreach ($siswa as $s)
                                <option value="{{ $s->id }}" @if ($s->id == $nilai->siswa_id) selected @endif>
                                    {{ $s->nama_siswa }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">NILAI ULANGAN HARIAN</td>
                    <td class="bar">
                        <input type="number" name="uh" value="{{ $nilai->uh }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">NILAI ULANGAN TENGAH SEMESTER</td>
                    <td class="bar">
                        <input type="number" name="uts" value="{{ $nilai->uts }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">NILAI ULANGAN AKHIR SEMESTER</td>
                    <td class="bar">
                        <input type="number" name="uas" value="{{ $nilai->uas }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">SIMPAN</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection
