@extends('layout.mainlayout')
@section('content')
<nav class="hide border-top border-secondary">
    <ul class="list-unstyled py-0 mb-0 HideAbleList">
        <li class= "d-inline-block p-3 ml-3 mr-1 NewIn">New IN</li>
        <li class= "d-inline-block p-3 mx-1 winter">Winter</li>
        <li class= "d-inline-block p-3 mx-1 tees">Tops</li>
        <li class= "d-inline-block p-3 mx-1 ef">Bottoms</li>
        <li class= "d-inline-block p-3 mx-1 pants">Party &amp; Evening Wears</li>
        <li class= "d-inline-block p-3 mx-1 footwear">Scarves</li>
        <li class= "d-inline-block p-3 mx-1 accessories">Bags</li>
    </ul>
</nav>
<div class="DivOverSlide">
<div class="container HoverAbleDiv">
    <div class="row p-2">
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Ethnic Top</a>
                </li>
                <li>
                    <a href="#">Bottoms</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Fashhion Tops &amp; Shirt</a>
                </li>
                
            
            </ul>
        </div>
        <div class="col">
        <ul class="list-unstyled">
                <li>
                    <a href="#">Shrugs &amp; Duster</a>
                </li>

            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Dress</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="DivOverSlide2">
<div class="container HoverAbleDiv2">
    <div class="row p-2">
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Overcoat</a>
                </li>
                <li>
                    <a href="#">Ponchos</a>
                </li>
               
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Hoodies</a>
                </li>
            </ul>
        </div>
        <div class="col">
        <ul class="list-unstyled">
                <li>
                    <a href="#">Jackets</a>
                </li>
               
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Sweatshirts</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<div class="DivOverSlide3">
<div class="container HoverAbleDiv3">
    <div class="row p-2">
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Kameez/Kurtis</a>
                </li>
              
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Fashion Tops &amp; Shirts</a>
                </li>
            </ul>
        </div>
        <div class="col">
        <ul class="list-unstyled">
                <li>
                    <a href="#">Shrugs &amp; Duster</a>
                </li>
               
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Blazers</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<div class="DivOverSlide4">
<div class="container HoverAbleDiv4">
    <div class="row p-2">
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">jeans</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Leggings</a>
                </li>
            </ul>
        </div>
        <div class="col">
        <ul class="list-unstyled">
                <li>
                    <a href="#">ZARZAIN PANTS</a>
                </li>
               
            </ul>
        </div>
    </div>
</div>
<div class="DivOverSlide5">
<div class="container HoverAbleDiv5">
    <div class="row p-2">
        <div class="col">
            <ul class="list-unstyled">
                <li>
                    <a href="#">Dress</a>
                </li>
                
               
            </ul>
        </div>

    </div>
</div>

</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/image/wslide1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/wslide2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/wslide3.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container mt-4">
<div class="row text-center">
    <div class="col-md-4">
        <div class="bg-hoodies" style="background-image: url('/image/ss20.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">SS 20/20</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-hoodies" style="background-image: url('/image/longshirt.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Long Shirts</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-hoodies" style="background-image: url('/image/shrugs.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Shrugs</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-hoodies" style="background-image: url('/image/tops.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Tops</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-hoodies" style="background-image: url('/image/bottom.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Bottom</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-hoodies" style="background-image: url('/image/scarf.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Scraves</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
   
</div>
<div class="row text-center">
    <div class="col">
    <div class=" single-col" style="background-image: url('/image/kameez.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Kameez</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="col">
    <div class=" single-col1" style="background-image: url('/image/bag.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Bags</p>
                    </div>
                    <div class="shop">
                        <p class="text-light">Shop Now</p>
                    </div>
                    <a class = "full-link" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection