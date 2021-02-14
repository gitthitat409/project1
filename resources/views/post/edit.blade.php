@extends('layout.master')

@section('content')
<h1>แก้ไขข้อมูล</h1>
<form action="/post/update/{{$post->id}}" method="post">
    @csrf
    ชื่อโพสต์<br>
    <input type="text" name="title" value="{{$post->title}}" required>
    <br>รายละเอียด<br>
    <input type="text" name="detail" value="{{$post->detail}}" required><br><br>
    <button type="submit">บันทึก</button>
</form>
@endsection
