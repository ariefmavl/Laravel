<!-- Connected to view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Contact Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>This is Contact Page</p>

    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>alievmorana@gmail.com</td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td>0822-5869-2970</td>
        </tr>

    </table>
@endsection