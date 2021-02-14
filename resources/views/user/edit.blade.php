@extends('layout.master')

@section('content')
<h1>แก้ไขข้อมูลสมาชิก</h1>
<form action="/user/update/{{$user->id}}" method="post">
    @csrf
    ชื่อสมาชิก<br>
    <input type="text" name="name" value="{{$user->name}}" required>
    <br>User Name<br>
    <input type="text" name="username" value="{{$user->username}}" required>
    <br>Email<br>
    <input type="text" name="email" value="{{$user->email}}" required>
    <br>Password<br>
    <input type="password" name="password" required><br><br>
    <button type="submit">บันทึก</button>
</form>
@endsection
