@extends('errors.layouts.master')
@section('title', '403 Link Expired')

@section('image')
    <img src="https://item.kakaocdn.net/do/7ab82b3c2f19bf65b0cc4ee917ff7a328f324a0b9c48f77dbce3a43bd11ce785" alt="403 Link Expired">
@endsection

@section('file', $file ?? '')
@section('line', $line ?? '')
@section('message', $message ?? '')
@section('description', $description ?? '')
