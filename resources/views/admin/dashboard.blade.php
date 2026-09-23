@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p style="color: #9a9a95; margin-top: 0.5rem;">Selamat datang, {{ auth()->user()->name }}.</p>
@endsection