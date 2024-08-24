@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/details.css') }}" rel="stylesheet">
@endsection

@section('title')
  商品詳細
@endsection

@section('contents')
  <main id="details" class="wrapper">
    <div class="contents">  
    <div class="product_pic">
      <img src="{{ asset('storage/'.$furniture->image_path)}}" alt="{{$furniture->name }}">
      </div>

      <div class="detail_contents">
        <div class="product_details">
          <h1>商品詳細</h1>
          <table>
          <tr>
              <th>商品名</th>
              <td>{{$furniture->name }}</td>
            </tr>
            <tr>
              <th>価格</th>
              <td>{{$furniture->price }} 円 </td>
            </tr>
            <tr>
              <th>コメント</th>
              <td>{{$furniture->details }}</td>
            </tr>
            <tr>
              <th>色</th>
              <td>{{$furniture->color }}</td>
            </tr>
            <tr>
              <th>素材</th>
              <td>{{$furniture->material }}</td>
            </tr>
          </table>
        </div>
        <div class="button">
          @if(Auth::user()-> admin == 1)
          <div class="edit_button">
            <form action="{{route('furniture.edit',[$furniture->id])}}" method="GET">
            <button type="submit" >編集</button>
            </form>
          </div>
            
          <div class="delete_button">
            <form action="{{route('furniture.destroy',[$furniture->id])}}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">削除</button>
            </form>
            </div>            
          @endif
          <div class="return-button">
            <a href="{{ route('furniture.index')}}">戻る</a>
          </div>
        </div>
      </div>
    </div>    
    
</main>
@endsection
