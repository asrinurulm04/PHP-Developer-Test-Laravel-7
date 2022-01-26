<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
        	<a class="navbar-brand" href="{{ url('/') }}">
          	{{ config('app.name', 'Laravel') }}
        	</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        	</button>
        	<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        	    </li>
        	    @if (Route::has('register'))
        	      <li class="nav-item">
        	        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        	      </li>
        	    @endif
        	    @else
        	    <li class="nav-item dropdown">
        	      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        	      {{ Auth::user()->name }}
        	      </a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
							@endguest
						</ul>
          </div>
        </div>
      </nav>
      <main class="py-4 ">
        <div class="container">
        <div class="card" style="">
          <div class="card-header">Add New Produk With API Local</div>
          <div class="row mt-3">
            <div class="col-md-12">
              <h3></h3>
              <form class="form-horizontal form-label-left" class="add-post-form" id="form">
                <div class="form-group row">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Produk</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required class="form-control" id="title-produk">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required class="form-control" id="title-harga">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Type Produk</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required class="form-control" id="title-type">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Stok</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" required class="form-control" id="title-stok">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
                <a href="{{route('global')}}" type="button" class="btn btn-dark">Coba CRUD menggunakan API Global</a>
              </form>
            </div>
          </div>
          <div class="post-list row">

          </div>
          </div>
        </div>
        </div>
      </main>
    </div>
    <script src="./js/main.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>