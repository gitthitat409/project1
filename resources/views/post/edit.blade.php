@extends('layout.master')

@section('content')
<h1>แก้ไขข้อมูล</h1>
<form action="/post/update/{{$post->id}}" method="post">
    @csrf
    <input type="text" name="title" value="{{$post->title}}" required>
    <input type="text" name="detail" value="{{$post->detail}}" required>
    <button type="submit">บันทึก</button>
</form>
@endsection
