@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/index.css') }}" rel="stylesheet">
@endsection

@section('title')
  家具通販サイト
@endsection

@section('contents')
<main id="top" class="wrapper">
    <div class="top_contents">
      <h1>Products</h1>
      @if(Auth::user()->admin == 1)
        <a class="create_btn" href="{{ route('furniture.create')}}">新規登録</a>
      @endif

      <div class="grid_container">
        @foreach($furnitures as $furniture)
          <div class="grid_item">
            <a href ="{{ route('furniture.show',[$furniture->id])}}">
              <img src="{{ asset('storage/'.$furniture->image_path)}}" alt="{{$furniture->name }}">
            </a>

            <p>NAME:{{$furniture->name}}</p>
            <p>PRICE:{{$furniture->price}}</p>
          </div>
        @endforeach
      </div>
    </div>
</main>
@endsection
