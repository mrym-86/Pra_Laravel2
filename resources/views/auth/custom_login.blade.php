<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width-initial-scale=1.0">
  <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('/assets/css/index.css') }}" rel="stylesheet"> --}}
      <title>ログイン画面</title>
</head>

<body>
  <div class ="login-container">
    <div class="container">
      <h1>ログイン</h1>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="email" value="___('Email')">メールアドレス</label>
          @error('email')
          <span style="color:red">入力内容が正しくありません</span>
          @enderror
          <input type="email" name="email" id="email" value="{{ old('email')}}" required> 
        </div>
        <div class="form-group">
          @error('password')
          <span style="color:red">入力内容が正しくありません</span>
          @enderror
          <label for="password" value="___('Password')">パスワード</label>
          <input type="password" name="password" id="password" value="{{ old('password')}}" required>
        </div>
        <!--<div class="form-group">
          <label for="checkbox" value="___('Checkbox')">あなたは管理者ですか？</label>
          <input type="checkbox" name="admin" id="admin" value="{{ old('admin')}}" required>
        </div>-->
        <div class="login-button">
          <button type="submit">{{ __('ログイン') }}</button>
        </div>
      </form>
    </div>
  </div>
</body>

