@extends('admin.app')

@section('admin-role', Auth::user()->getRole() )
@section('admin-content')
{{var_dump($admins)}}
@endsection