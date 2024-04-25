@extends('layouts.master')
@include('test.blade.navi')

@section('content')
    @php
        $message= "Success message here.";
        $etc= "etc message here.";
        $userId ="jhintmain";
    @endphp

    <x-alert type="success" :message="$message" :etc="$etc"/>
    <x-alert type="primary">
        <strong>slot insert</strong>
    </x-alert>
    <x-alert type="secondary"/>
    <x-alert type="danger" :etc="$etc"/>
    <x-alert type="warning" :$etc :$userId/>
    <x-alert type="light"/>
    <x-alert type="dark"/>
@endsection
