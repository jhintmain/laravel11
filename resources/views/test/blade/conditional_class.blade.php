@extends('layouts.master')
@include('test.blade.navi', ['isActive' => 'conditional_class'])
@php
    $isActive = false;
@endphp

@section('content')
    <div class="container">
        <span @style([
            'background-color: red',
            'font-weight: bold' => $isActive,
        ])>TESTEST</span>

        <br>

        <span style="background-color: red; font-weight: bold;">TESTEST</span>
    </div>

@endsection


