<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn Fetch API</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
</body>
</html>