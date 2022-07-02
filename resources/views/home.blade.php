@extends('layouts.master')

@section('content')
    <div class="container">
        @include('home.personal_info')
        @include('home.projects')
        @include('home.contact')
    </div>

@endsection

@section('scripts')

@endsection
