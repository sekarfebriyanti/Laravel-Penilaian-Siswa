@extends('main.layout')
@section('content')

    <center>
        <h2>TAMBAH DATA MENGAJAR</h2>
        <form action="/mengajar/store" method="post" >
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Guru</td>
                    <td class="bar">
                        <select name="guru_id" id="">
                            <option value=""></option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Mapel</td>
                    <td class="bar">
                        <select name="mapel_id" id="">
                            <option value=""></option>
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
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
