@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/edit.css') }}" rel="stylesheet">

@endsection

@section('title')
  商品編集画面
@endsection

@section('contents')
<main id="edit" class="wrapper">
  <h1>商品編集画面</h1>
    <form action="{{ route('furniture.update',[$furniture->id])}}" method="POST">
      @csrf
      <div class="top_contents">
        <table>
          <tr>
            <th>項目名</th>
            <th>入力箇所</th>
          </tr>
          <tr>
            <td>
              <label for="name">商品名</label>
            </td>
            <td>
              <input type="text" id="name" name="name" value="{{old('name',$furniture->name)}}">
            </td>
          </tr>
          <tr>
            <td>
              <label for="price">価格</label>
            </td>
            <td>
              <input type="integer" id="price" name="price" value="{{old('price',$furniture->price)}}">
            </td>
          </tr>
          <tr>
            <td>
              <label for="details">コメント</label>
            </td>
            <td>
              <input type="text" id="details" name="details" value="{{old('details',$furniture->details)}}">
            </td>
          </tr>          
          <tr>
            <td>
              <label for="color">色</label>
            </td>
            <td>
              <input type="string" id="color" name="color" value="{{old('color',$furniture->color)}}">
            </td>
          </tr>
          <tr>
            <td>
              <label for="material">素材</label>
            </td>
            <td>
              <input type="string" id="material" name="material" value="{{old('material',$furniture->material)}}">
            </td>
          </tr>
          <tr>
            <td>
              <label for="details">画像</label>
            </td>
            <td>
              <input type="file" id="image_path" name="image_path" value="{{old('image_path',$furniture->image_path)}}">
            </td>
          </tr>
        </table>
      </div>
      <div class="edit_btn">
        <input type="submit" value="変更"></input>
      </div>
</main>
@endsection
