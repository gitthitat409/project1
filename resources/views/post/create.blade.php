@extends('layout.master')

@section('content')
<h1>โพสต์กระทู้ของคุณ</h1>
<form action="/post/store" method="post">
    @csrf
    <br>ชื่อโพสต์
    <input type="text" name="title" required>
    <br>รายละเอียด
    <input type="text" name="detail" required>
    <button type="submit">บันทึก</button>
</form>
@endsection
