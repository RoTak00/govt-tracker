@extends('layouts.base')

@section('title', 'Pagina principală')

@section('content')
    <h2>Bine ai venit pe Government Tracker</h2>
    <p>Aici poți urmări activitatea Președintelui și a Guvernului României.</p>
    <p>Votează, comentează și discută despre acțiunile politice ale liderilor actuali.</p>
@endsection

@section('sidebar')
    @include('partials.sidebar_base')
@endsection