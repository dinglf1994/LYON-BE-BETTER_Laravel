@extends('layouts.master')

@section('title', 'Lyon')

@section('sidebar')
    @parent
    <a href="admin/test">TEST</a>
@endsection

@section('content')
    <h2>This is my body.</h2>
@endsection

@section('footer')
    <h3>this is footer</h3>
@endsection