@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/details.css') }}" rel="stylesheet">
@endsection

@section('title')
  商品詳細
@endsection

@section('contents')
  <main id="details" class="wrapper">
    <h1>商品詳細</h1>
    <p>・アイテム写真：<img src="{{ asset( $furniture->image_path)}}" alt="{{$furniture->name }}"</p>
    <p>・コメント:{{$furniture->details }}</p>

  <p>・値段</p>
  <p>・サイズ</p>
  <p>・色</p>
  <p>・素材</p>
@endsection
