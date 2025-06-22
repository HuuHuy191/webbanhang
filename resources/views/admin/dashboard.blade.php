@extends('admin_layout')
@section('admin_content')
<h3>Chào mừng bạn đến với admin</h3>
<form action="{{ route('admin.logout') }}" method="POST" style="margin-top: 20px;">
    @csrf
    <button type="submit" class="btn btn-danger">Đăng xuất</button>
</form>
@endsecttion