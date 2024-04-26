@extends('errors.layouts.master')
@section('title', '500 Internal Server Error')

@section('image')
    <img src="https://item.kakaocdn.net/do/7ab82b3c2f19bf65b0cc4ee917ff7a329f5287469802eca457586a25a096fd31" alt="500 Internal Server Error" style="height: 400px; width: 400px;">
{{--    <img src="https://go.dev/images/gophers/motorcycle.svg" alt="500 Internal Server Error">--}}

@endsection

@section('file', $file ?? '')
@section('line', $line ?? '')
@section('message', $message ?? '')
@section('description', $description ?? '')
