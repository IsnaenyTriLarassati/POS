@extends('layouts.app')

{{-- customize layout section --}}
@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- content body: main page content --}}

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

{{-- push extra CSS --}}
@push('css')
    {{-- Add here extra stylesheets
    <link rel="stylesheet" href="/css/admin/custom.css"> --}}
@endpush

{{-- push extra script --}}
@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush

