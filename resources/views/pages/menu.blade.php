
<div style= position:absolute;top:0%;right:50px;color:rgb(26,24,24); >
      <i class="fas fa-shopping-cart"></i> Cart
      <span id="cart-items" class="count-badge count-zero">0</span>
   </div>


    <span class="dropdown account">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="far fa-user-circle"></i> My Accont
      </button>
  
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="/login">Log in</a></li>
        <li><a class="dropdown-item" href="/register">Register</a></li>
        <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
      </ul>
    </span>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
     <a class="navbar-brand" href="#"></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="/">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/events">Special Events</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="/personalizes" id="navbarDropdown" role="button" 
           data-bs-toggle="dropdown" aria-expanded="false">
             Personalised
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="/jewellery">Jewellery</a></li>
             <li><a class="dropdown-item" href="#">Gifts</a></li>
             <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="#">Events</a></li>
           </ul>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
         </li>
       </ul>
       <form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Search</button>
       </form>
     </div>
   </div>
 </nav>