@extends('tpl::master')

@section('title', 'Welcome')

@push('metas')
@endpush

@push('styles')
@endpush

@push('scripts')
@endpush

@section('body')
<div class="container">
    <div class="starter-template">
        <h1>{{ $home_heading }}</h1>
        <p class="lead">{{ $home_tagline }}</p>
        <a href="#" class="btn btn-primary btn-lg mb-3 mb-md-0 mr-md-3">
        {{ $home_button_text }}</a>
    </div>
</div><!-- /.container~/welcome -->
@endsection
