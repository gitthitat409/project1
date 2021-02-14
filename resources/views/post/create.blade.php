@extends('layout.master')

@section('content')
<h1>โพสต์กระทู้ของคุณ</h1>
<form action="/post/store" method="post" enctype="multipart/form-data">
    @csrf
        ชื่อโพสต์
    <input type="text" name="title" required>
    <br>รูปประจำข่าว
    <input type="file" name="thumbnail">
    <br>หมวดหมู่ข่าว
    <select name="category_id" id="">
        @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>@endforeach
    </select>
    <br>รายละเอียด
    <textarea name="detail" id="" cols="30" rows="10"></textarea>
    <button type="submit">บันทึก</button>
</form>
@endsection
