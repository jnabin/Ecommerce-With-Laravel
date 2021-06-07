@extends('layout.mainlayout')
@section('content')
@php
    $i = 0;
    $j=1;
    $k = 0;

    $class = "hoverx";
    $class2 = "HoverAbleDiv";
    $class3 = "DivOverSlide";
@endphp

<nav class="hide border-top border-secondary">
    <ul class="list-unstyled py-0 mb-0 HideAbleList">
        @foreach ($category->subCategories as $item)
        @php
            $i++;
        @endphp
        @if ($i==1)
        <li class= "d-inline-block p-3 ml-3 mr-1 {{$class.$i}}">{{$item->subCategory_name}}</li>            
        @else
        <li class= "d-inline-block p-3 mx-1 {{$class.$i}}">{{$item->subCategory_name}}</li>
        @endif
        @endforeach
       
    </ul>
</nav>
@foreach ($category->subCategories as $item)
    @php
        $j++;
        $k++;
    @endphp
    
    <div class="{{$class3.$k}}">
    
        <div class="container {{$class2.$j}}">
            <div class="row p-2">
                <div class="col">   
                    <ul class="list-unstyled" style="column-count: 3"> 
                        @foreach ($item->finalSubcategories as $item2)
                        <li>
                            <a href="#">{{$item2->finalSubcategories_name}}</a>
                        </li>
                        @endforeach
                    </ul>     
                </div>
            </div>
        </div>   
    </div>
@endforeach
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/image/slide1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/slide2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/slide3.jpeg" alt="Third slide">
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
        <div class="bg-hoodies" style="background-image: url('/image/hoodie.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Hoodies</p>
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
        <div class="bg-hoodies" style="background-image: url('/image/winter.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Winter</p>
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
        <div class="bg-hoodies" style="background-image: url('/image/sweatshirt.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Sweatshirts</p>
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
        <div class="bg-hoodies" style="background-image: url('/image/jeans.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Jeans</p>
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
        <div class="bg-hoodies" style="background-image: url('/image/blazer.jpeg');">
        <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Blazers</p>
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
        <div class="bg-hoodies" style="background-image: url('/image/joggers.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Joggers</p>
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
    <div class=" single-col" style="background-image: url('/image/accessories.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Accessories</p>
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
    <div class=" single-col1" style="background-image: url('/image/casual.jpeg');">
            <div class="uppercontent">
                <div class="content">
                    <div class="content-name ">
                        <p class="text-light mb-1">Casual Shirt</p>
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