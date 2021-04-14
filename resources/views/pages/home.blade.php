@extends('base')

@section('title', 'Hello-city')

    <img src="/images/quebec-flag.png" alt="Quebec flag" class="mt-12 rounded shadow-md" style="height: 150px; width:200px;">

@section('content')
            <h1 class="mt-5 text-3xl  sm:text-5xl font-semibold text-indigo-600">Hello From Quebec !</h1>

            <p class="text-lg text-gray-800">It's currenty {{ date('h:i A')}}.</p>     

@endsection