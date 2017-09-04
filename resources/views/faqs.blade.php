@extends('tpl::master')

@section('title', 'FAQs')

@section('body')
<div class="container">
    <h3>Faqs</h3>
    @foreach ($faqs as $faq)
      <h6>{{ $faq->question }}</h6>
      <p>{{ $faq->answer }}</p>
    @endforeach
</div><!-- /.container~/welcome -->
@endsection
