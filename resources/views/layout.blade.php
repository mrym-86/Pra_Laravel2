<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- ここはpublic以下 --}}
    <link href="{{ asset('/assets/css/reset.css') }}" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('/assets/css/layout.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
  </head>

  <body>
    <header id="header" class="wrapper">
      <div class="title_logo">
        <a href="{{ route('furniture.index')}}">furniture Design</a>
      </div>

      <div class="menu">
        <a href="#">二</a>
      </div>
        <!-- ハンバーガー内menu -->
        <nav>
          <a href="{{ route('furniture.index')}}"> PRODUCTS</a>
          <a href="{{ route('furniture.about')}}">ABOUT</a>
          <a href="{{ route('furniture.company')}}">COMPANY</a>
          <a href="mailto:address">CONTACT</a>
        </nav>
    </header>

    <main>
      @yield('contents')

    </main>

    <footer id="footer" class="wrapper">
      <div class="footer_menu">
        <ul>
          <li><a href="https://www.instagram.com/" target="_blank">INSTAGRAM</a></li>
          <li><a href="https://twitter.com/" target="_blank">TWITTER</a></li>
          <li><a href="https://www.facebook.com/" target="_blank">FACEBOOK</a></li>
        </ul>
      </div>

      <div class="index">© furniture Design</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
