@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/vision.css') }}" rel="stylesheet">
@endsection

@section('title')
  VISION
@endsection

@section('contents')
<main id="vision" class="wrapper">
  <div class="vision_page">
      <div class ="page_title">
        <h1>Vision</h1>
      </div>

      <div class="vision_content"> 
        <div class ="vision_pic">
          <img src="{{asset('images/vision_pic.jpg')}}" alt="会社イメージ画像">
        </div>
        
        <div class="vision_text">
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          <br>
          <br>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          <br>
          <br>
          <br>
          <p class="contact_link">弊社へのお問い合わせは <a href="https://docs.google.com/forms/d/e/1FAIpQLSeumVBPJNY9AE_IB7rnfCIraHnT9MJJpFi4p_JTun8bywYr0Q/viewform?usp=sf_link">こちら</a> から</p>
        </div>
      </div>
    </div>
 
  </main>
@endsection

