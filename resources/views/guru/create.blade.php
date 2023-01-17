@extends('main.layout')
@section('content')

    <center>
        <br>
            <h2>TAMBAH DATA GURU</h2>
            <form method="post" action="/guru/store">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar"> NIP </td>
                        <td class="bar"> 
                            <input type="text" name="nip">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar"> Nama Guru </td>
                        <td class="bar"> 
                        <input type="text" name="nama_guru">
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
                        <td class="bar"> Alamat </td>
                        <td class="bar"> 
                        <textarea name="alamat" id="" cols="30" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar"> Password </td>
                        <td class="bar"> 
                        <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"</td>
                        <center><button class="button-primary" type="submit">SIMPAN</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </br>
    </center>
@endsection