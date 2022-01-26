@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-6">
        <a href="{{route('global')}}" class="btn btn-primary">Coba CRUD menggunakan API Global</a>
        <h3>Add New Produk With API Local</h3>
        <form class="add-post-form" id="form">
          <div class="form-group">
            <label for="title">Produk</label>
            <input type="text" class="form-control" id="title-produk">
          </div>
          <div class="form-group">
            <label for="title">Harga</label>
            <input type="text" class="form-control" id="title-harga">
          </div>
          <div class="form-group">
            <label for="title">Type Produk</label>
            <input type="text" class="form-control" id="title-type">
          </div>
          <div class="form-group">
            <label for="title">stok</label>
            <input type="text" class="form-control" id="title-stok">
          </div>
          <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
      </div>
    </div>
    <div class="post-list row">
    </div>
  </div>
  <script src="./js/main.js"></script>
@endsection