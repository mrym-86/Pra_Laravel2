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
      <table>
          @foreach($furnitures as $furniture)
            <tr>
              <td><a href ="{{ asset('/resources/views/details.blade.php') }}"><img src="{{ asset( $furniture->image_path)}}" alt="{{$furniture->name }}"></a></td>
              <td>{{$furniture->name}}</td>
              <td>{{$furniture->price}}</td>
            </tr>
          @endforeach
      </table>
    </div>
    <a class="btn" href="{{ route('furniture.create')}}">新規登録</a>
    <a class="btn" href="{{ route('furniture.edit')}}">内容変更</a>
</main>
@endsection