@extends('main.layout')
@section('content')

    <center>
        <br>
            <h2>TAMBAH DATA JURUSAN</h2>
            <form method="post" action="/jurusan/store">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar"> Nama Jurusan </td>
                        <td class="bar"> 
                            <input type="text" name="nama_jurusan">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <center><button class="button-primary" type="submit">SIMPAN</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </br>
    </center>
@endsection