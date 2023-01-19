@extends('main.layout')
@section('content')

    <center>
        <h2>TAMBAH DATA SISWA</h2>
        <form action="/siswa/store" method="post" >
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Siswa</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa">
                    </td>
                </tr>
                <tr>
                    <td class="bar"> Jenis Kelamin </td>
                    <td class="bar"> 
                    <input type="radio" name="jk" value="L">Laki-laki
                    <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <input type="text" name="alamat">
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
                    <td class="bar">Password</td>
                    <td class="bar">
                        <input type="password" name="password">
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
