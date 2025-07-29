@extends('layouts.app')

@section('content')
    <div id="root"></div>
@endsection

@viteReactRefresh
@vite(['resources/js/app.jsx'])
