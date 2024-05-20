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
        <thead>
          <tr>
            <th>画像</th>
            <th>商品名</th>
            <th>価格</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Furniture as $Furniture)
            <tr>
              <td>{{$Furniture->name}}</td>
              <td>{{$Furniture->price}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endsection
</main>
