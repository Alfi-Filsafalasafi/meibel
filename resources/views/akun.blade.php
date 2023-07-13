@extends('layout.master')
@section('title','Daftar Akun')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Daftar Akun</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->username}}</th>
                    <th>{{$user->password}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->role}}</th>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection