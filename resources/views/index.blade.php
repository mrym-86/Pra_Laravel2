@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/index.css') }}" rel="stylesheet">
@endsection

@section('title')
  通販サイト
@endsection

@section('contents')
<main id="top" class="wrapper">
    <div class="top_contents">
      <table>
          @foreach($furnitures as $furniture)
            <tr>
              <td><img src="{{ asset( $furniture->image_path)}}" alt="{{$furniture->name }}"></td>
              <td>{{$furniture->name}}</td>
              <td>{{$furniture->price}}</td>
            </tr>
          @endforeach
      </table>
    </div>
    @endsection
</main>
