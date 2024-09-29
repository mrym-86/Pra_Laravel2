@extends('layout')

@section('css')
<link href="{{ asset('/assets/css/company.css') }}" rel="stylesheet">
@endsection

@section('title')
  COMPANY
@endsection

@section('contents')
<main id="company" class="wrapper">
  <div class="company_page">
    <div class="page_title">
      <h1>Company</h1>
    </div>

    <div class="com_about">
      <dl>
        <dt>会社名</dt>
        <dd>株式会社 Furniture Design</dd>
        <dt>住所</dt>
        <dd>〒107-0062 東京都港区南青山１丁目××××××</dd>
        <dt>設立</dt>
        <dd>XXXX年XX月</dd>
        <dt>資本金</dt>
        <dd>XXXX万円</dd>
        <dt>従業員数</dt>
        <dd>XX名</dd>
        <dt>事業内容</dt>
        <dd>
            家具、インテリアの企画・生産・販売
            <br>
            店舗の企画・デザイン・設計
        </dd>
      </dl>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2914385368663!2d139.72304042623082!3d35.669825280599774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c820ac932eb%3A0xc68079dd10afd971!2z44CSMTA3LTAwNjIg5p2x5Lqs6YO95riv5Yy65Y2X6Z2S5bGx77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1706413694490!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
@endsection