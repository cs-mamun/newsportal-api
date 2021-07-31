@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div id="app">
        <App></App>
    </div>
    <div class="">
        Laravel v{{\Illuminate\Foundation\Application::VERSION}} and PHP v{{PHP_VERSION}}
    </div>
@endsection
