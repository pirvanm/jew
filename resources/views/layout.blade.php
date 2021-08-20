<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    </head>
<body>
    <!-- NAVBAR -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.create') }}">New Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.create') }}">New Category</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <body style="background-color:lavender;">

<br>
 <br>   
</span>
<span class="logo">Personalised Jewellery, Accessories & Gifts</span>

</h1>

<a href ="contact us.html">
<div style= position:absolute;top:0%;color:rgb(26,24,24); >
   Contact Us
</div>
</a>
<div id= "inside background">
</div>

<br>
@include('pages.menu')

    <div class="container mt-4">
        <div class="col-md-12 mx-auto">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<style>

.account{
    margin-left:20em;
    padding-left: 30em;
    position:absolute;top:0%;right: 130px;
}

.logo  {
    font-family: 'Mr Dafoe', cursive;
    font-size: 20px;
    margin:20px;}
  </style>
