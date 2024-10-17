<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width-initial-scale=1.0">
  <link href="{{ asset('/assets/css/register.css') }}" rel="stylesheet">
      <title>ユーザー登録画面</title>
</head>

<body>
  <div class="register_container">
    <div class="container">
      <h2>ユーザー登録</h2>
        <form method="POST" action="{{ route('register.store') }}">
          @csrf
            <div class="form-group">
              <label for="name" value="__('Name')">名前</label>
              @error('name')
              <span style ="color:red">入力内容が正しくありません</span>
              @enderror
              <input type="name" name="name" id="name" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
              <label for="email" value="__('Email')">メールアドレス</label>
              @error('name')
              <span style ="color:red">入力内容が正しくありません</span>
              @enderror
              <input type="email" name="email" id="email" value="{{old('email')}}" required>
            </div>

            <div class="form-group">
              <label for="admin" value="__('Admin')">あなたは管理者ですか？</label>
              <input type="hidden" name="admin" id="admin" value=0 >
              <input type="checkbox" name="admin" id="admin" value=1 >
            </div>

            <div class="form-group">
              <label for="password" value="__('password')">パスワード</label>
              @error('name')
              <span style ="color:red">入力内容が正しくありません</span>
              @enderror
              <input type="password" name="password" id="password" value="{{old('password')}}" required>
            </div>

            <div class="register_btn">
              <button type="submit">{{__('新規登録')}}</button>
            </div>
        </form>
    </div>
  </div>  
</body>   
