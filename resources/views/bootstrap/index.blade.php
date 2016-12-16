@extends('layouts.master')

@section('title', 'Lyon')

@section('sidebar')
    @parent
    <h1>This is append to the master sidebar</h1>
@endsection

@section('content')
    <h2>This is my body.</h2>
@endsection