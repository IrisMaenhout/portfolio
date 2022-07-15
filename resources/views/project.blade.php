@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/project-page.css') }}">
@endsection


@section('content')
    <div>
        @include('project.short-info')
        @include('project.project-info')

    </div>


@endsection

@section('scripts')
    <script src="{{ asset('js/project.js') }}"></script>
    <script src="{{ asset('js/slideshow.js') }}"></script>
@endsection
