@extends('layout.master')

@section('content')
<h1>LOGIN</h1>
<form action="/auth/doLogin" method="post">
    @if($errors->any())
        @foreach($errors->all() as $item)
        {{$item}}
    @endforeach
    @endif
    @csrf
    <br>อีเมล์:<input type="email" name="email" required><br><br>
    รหัสผ่าน :<input type="password" name="password" required><br><br>
    <button type="submit">เข้าสู่ระบบ</button>
</form>
@endsection
