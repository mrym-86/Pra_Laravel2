@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/item_registration.css') }}" rel="stylesheet">
@endsection

@section('title')
  新規登録画面
@endsection

@section('contents')
<main id="item_registration" class="wrapper">
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
        </table>
      </div>
      <button type="submit">新規登録</button>
    
</main>
@endsection