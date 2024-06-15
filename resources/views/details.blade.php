@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/details.css') }}" rel="stylesheet">
@endsection

@section('title')
  アイテム名
@endsection

@section('contents')
  ・アイテム写真
  ・コメント
  ・値段
  ・サイズ
  ・色
  ・素材
  記載予定
@endsection