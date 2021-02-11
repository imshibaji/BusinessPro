@extends('user::layouts.master')

@section('content')
<div id="app">
    <my-app></my-app>
</div>
@endsection

@section('styles')
<link href="{{ URL::asset('css/app.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('scripts')
<script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
