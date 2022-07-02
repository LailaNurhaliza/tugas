@extends('layouts.master')

@section('content')
    <div class="container">
    <a class="btn btn-primary" href="/mahasiswa/create">Add data</a>
    <table class="table table-hover">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>JURUSAN</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
        </tr>
        @foreach($mahasiswa as $w)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$w->nama}}</td>
            <td>{{$w->nim}}</td>
            <td>{{$w->jurusan}}</td>
            <td>{{$w->jenis_kelamin}}</td>
            <td>{{$w->alamat}}</td>
            <td>
                <div class="btn-group" role="group"aria-lable="Basic example">
                <a class="btn btn-warning"href="/mahasiswa/{{$w->id}}/edit">Edit</a>
                    <form action="/mahasiswa/{{$w->id}}" method="POST">
                    @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete" onclick="confrim('Sure ?')">
                    </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
@endsection


