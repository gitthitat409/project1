@extends('layout.master')

@section('content')
<h1>กรุณากรอกข้อมูลสมาชิก</h1>
<form action="/user/store" method="post">
    @csrf
    ชื่อสมาชิก:<input type="text" name="name" required><br>
    Username:<input type="text" name="username" required><br>
    Email:<input type="text" name="email" required><br>
    Password:<input type="text" name="password" required><br><br>
    <button type="submit">บันทึก</button>
</form>
@endsection
