@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/about.css') }}" rel="stylesheet">
@endsection

@section('title')
  ABOUT
@endsection

@section('contents')
<main id="about" class="wrapper">
  <div class="about_page">
      <div class ="page_title">
        <h1>About</h1>
      </div>

      <div class="about_content"> 
        <div class ="about_pic">
          <img src="{{asset('images/about_pic.jpg')}}" alt="会社イメージ画像">
        </div>
        
        <div class="about_text">
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

