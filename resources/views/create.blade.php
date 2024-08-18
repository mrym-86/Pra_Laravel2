@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/create.css') }}" rel="stylesheet">
@endsection

@section('title')
  新規登録画面
@endsection

@section('contents')
<main id="create" class="wrapper">
  <h1>新規登録画面</h1>
  <form action="{{ route('furniture.store') }}" method="POST">
      @csrf
      <div class="top_contents">
        <table>
          <tr>
            <th>項目名</th>
            <th>入力箇所</th>
          </tr>
          <tr>
            <td>商品名</td>
            <td><input type="text" name = "name" required></td>
          </tr>
          <tr>
            <td>価格</td>
            <td><input type="text" name = "price" required></td>
          </tr>
          <tr>
            <td>コメント</td>
            <td><input type="textarea" name = "details" required></td>
          </tr>
          <tr>
            <td>色</td>
            <td><input type="text" name = "color" required></td>
          </tr>
          <tr>
            <td>素材</td>
            <td><input type="text" name = "material" required></td>
          </tr>
          <tr>
            <td>写真</td>
            <td><input type="file" name = "image_path" required></td>
          </tr>
        </table>
      </div>
      <div class="create_btn">
        <input type="submit">新規登録</input>
      </div>
</main>
@endsection
