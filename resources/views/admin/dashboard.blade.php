@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p style="color: var(--text-muted); margin-top: 0.5rem;">Selamat datang, {{ auth()->user()->name }}.</p>
@endsection