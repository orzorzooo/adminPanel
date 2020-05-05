<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="{{ mix('css/admin.css', 'assets/build') }}">
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    @include('_components.header')

    <div class="app-main">

      @include('_components.sidebar')
      <div class="app-main__outer">
        <div class="app-main__inner">

          @yield('content')
          {{-- @component('_components.page_title',[
          'page_title' => 'Dashboard',
          'page_description' => 'Some Description Here'
          ])
          @slot('page_title_actions')
          @endcomponent --}}

        </div>
        @include('_components.footer')


      </div>
    </div>
  </div>

  <script type="text/javascript" src="{{ mix('js/admin.js', 'assets/build') }}"></script>
  <script type="text/javascript" src="{{ mix('js/main.js', 'assets/build') }}"></script>
  @yield('script')
</body>


</html>