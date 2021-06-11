@php
    $loopcounter=0;
    $loopcounter1=0;
    $loopcounter2=0;

    $place="#submenu";
    $place1="#submenunxt";
    $place2="#submenunext";

    $placeId="submenu";
    $placeId1="submenunxt";
    $placeId2="submenunext";
@endphp


<div class="wrapper">

<nav id = "sidebar" style="overflow-y:scroll">
  <div id = "dismiss">
    <i class = "fas fa-arrow-left"></i>

  </div>
  <div class="sidebar-header">
    <a href="#"><i class="fas fa-home fa-2x"></i></a>
  </div>

  <ul class="list-unstyled components">
    @foreach ($categories as $item)
    @php
        $loopcounter++;
    @endphp
    <li class="active">
      <a href="{{$place.$loopcounter}}" data-toggle = "collapse" aria-expanded = "false">{{$item->mainCategory_name}}</a>
      <ul class = "collapse list-unstyled" id = "{{$placeId.$loopcounter}}">
        @foreach($item->subCategories as $item2)
        @php
        $loopcounter1++;
    @endphp
        <li>
          <a href="{{$place1.$loopcounter1}}" data-toggle = "collapse" aria-expanded = "false">{{$item2->subCategory_name}}</a>
          <ul  class="ml-4 collapse list-unstyled" id="{{$placeId1.$loopcounter1}}">
          @foreach ($item2->finalSubCategories as $item3)
          <li>
            <a href="#">{{$item3->finalSubcategories_name}}</a>
          </li>
          @endforeach
        </ul>
      </li>
        @endforeach
      </ul>
    </li>
    @endforeach
  </ul>
</nav>

</div>
<div class="overlay"></div>


<nav class="navbar navbar-expand navfont1  mt-2 mb-2 navbar-light justify-content-between">
<div class = "hide">
<ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{route('ManFashion.index')}}">Men <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('WomenFashion.index')}}">Women</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Gift Voucher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('LifeStyles.index')}}">LifeStyles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#">SALE</a>
      </li>
    </ul>
</div>
<div><a class="navbar-brand right ml-2 text-dark font-italic" href="{{route('Home.index')}}"><b>JNFASHION&reg</b></a></div>
<div class = "row">
<div class="hide col-5 p-0">
    <input class="form-control p-1" type="search" placeholder="search store" aria-label="Search">
    </div>
    <div class="hide col-2 pl-1">
    <button class="btn btn-outline-success my-2 my-sm-0 p-1" type="submit"><i class="fa fa-search fa-sm" aria-hidden="true"></i></button>
   
    </div>
<div class="col pl-1">
<a class = "mr-3 text-secondary" href="#"><i class="fa fa-shopping-bag fa-lg"></i></a>
  <a class = "text-secondary" href="{{route('Login.index')}}"><i class="fa fa-user fa-lg"></i></a>
</div>
  </div>
 
</nav>


<nav class="navbar navbar-expand navfont navbar-light bg-dark mt-2">
  <div class="row">
  <div class="col">
    <button type = "button" id="sidebarCollapse" class ="btn">
      <i class = "fas fa-align-left"></i>
    </button>
  </div>
  <div class=" col  ml-5">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('ManFashion.index')}}">Men <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{route('WomenFashion.index')}}">Women</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" style = "white-space:nowrap" href="#">Gift Voucher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('LifeStyles.index')}}">LifeStyles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#">SALE</a>
      </li>
    </ul>
  </div>
  </div>
</nav>