@extends('tpl::master')

@section('title', 'Contact Us')

@section('body-container')
<div class="row">
  <div class="col-sm-8 col-md-9">
    @include('tpl::contact._form')
  </div>
  <div class="col-sm-4 col-md-3">
    @include('tpl::contact._officeAddress')
    @include('tpl::contact._socialLinks')
  </div>
</div>
@endsection