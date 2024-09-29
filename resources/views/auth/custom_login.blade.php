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
    <div class =container>
      <h2>会員の方</h2>
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

        <div class="register-button">
          <p>※会員でない方は<a href="{{ route('register')}}">こちら</a>から登録</p>
        </div>
        <div class="login-button">
          <button type="submit">{{ __('ログイン') }}</button>
        </div>
      </form>
    </div>
  </div>
</body>

