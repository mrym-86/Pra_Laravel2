<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width-initial-scale=1.0">
  <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet">
      <title>ログイン画面</title>
</head>

<body>
  <div class ="login-container">
  <h1>ログイン</h1>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
      <label for="email" value="___('Email')">メールアドレス</label>
      <input type="email" name="email" id="email" value="{{ old('email')}}" required>
    </div>
    <div class="form-group">
      <label for="password" value="___('Password')">パスワード</label>
      <input type="password" name="password" id="password" value="{{ old('password')}}" required> 
    </div>
    <button type="submit">{{ __('ログイン') }}</button>
  </form>
</div>
</body>

  