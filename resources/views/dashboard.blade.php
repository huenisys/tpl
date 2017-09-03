@extends('tpl::master')

@section('title', 'Dashboard')

@section('body-container')

<h1>Dashboard</h1>

@if (Auth::check())
<p>You are logged in!</p>
@else
<p>You are not logged in!</p>
@endif

@endsection
