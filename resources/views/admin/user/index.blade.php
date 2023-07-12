@extends('admin.layout') @section('title','User') @section('content')
<div class="card p-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="/admin/user/{{ $user->id }}" onclick="event.preventDefault(); document.getElementById('{{ $user->id }}').submit();">Hapus</a></td>

                <form action="/admin/user/{{ $user->id }}" method="POST" id="{{ $user->id }}">
                    @method('DELETE') 
                    @csrf
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
