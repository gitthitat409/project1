@extends('layout.master')

@section('content')
<h1>แก้ไขข้อมูล</h1>
<form action="/user/update/{{$category->id}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$category->name}}" required>
    <button type="submit">บันทึก</button>
</form>
@endsection
