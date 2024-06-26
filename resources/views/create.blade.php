@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/create.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/index.css') }}" rel="stylesheet">
@endsection

@section('title')
  新規登録画面
@endsection

@section('contents')
<main id="create" class="wrapper">
  <h1>新規登録画面</h1>

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
      <button type="submit">新規登録</button>

</main>
@endsection
