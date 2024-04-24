@extends('layouts.master')
@include('test.blade.navi')

@section('content')
    <x-alert type="success">
        Success message here.
    </x-alert>
    <x-alert type="primary">
        primary message here.
    </x-alert>
    <x-alert type="secondary">
        secondary message here.
    </x-alert>
    <x-alert type="danger">
        danger message here.
    </x-alert>
    <x-alert type="warning">
        warning message here.
    </x-alert>
    <x-alert type="light">
        light message here.
    </x-alert>
    <x-alert type="dark">
        dark message here.
    </x-alert>
@endsection
