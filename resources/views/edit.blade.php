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
      @csrf
      <div class="top_contents">
        <table>
          <tr>
            <th>項目名</th>
            <th>入力箇所</th>
          </tr>
          <tr>
            <td>商品名</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>価格</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>画像ファイル名</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>画像ファイル格納先</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>詳細コメント</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>サイズ</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>色</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>素材</td>
            <td><input type="text"></td>
          </tr>

        </table>
      </div>
      <button type="submit">変更</button>

</main>
@endsection
