
@extends('layouts.app')
@section('content')
<h2>Danh sách User và Profile</h2>
<table>
    <tr>
        <th>Tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
    </tr>
    @foreach($users as $u)
    <tr>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->myProfile->address  }}</td>
        <td>{{ $u->myProfile->phone }}</td>
    </tr>
    @endforeach
</table>
@endsection