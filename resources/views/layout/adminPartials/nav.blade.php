
@php
$loopcounter = 1;
@endphp
@foreach ($categories as $item)
$loopcounter++;
$place = "#x".$loopcounter;
<li class="active">
  <a href="{{$place}}" data-toggle = "collapse" aria-expanded = "false">{{$item->mainCategory-name}}</a>
  <ul class = "collapse list-unstyled" id = "{{$place}}">
@endforeach
<div class="wrapper">

<nav id = "sidebar" style="overflow-y:scroll">
  <div id = "dismiss">
    <i class = "fas fa-arrow-left"></i>

  </div>
  <div class="sidebar-header">
    <a href="#"><i class="fas fa-home fa-2x"></i></a>
  </div>

  <ul class="list-unstyled components">
   
    <li class="active">
      <a href="#homeSubmenu" data-toggle = "collapse" aria-expanded = "false">Men</a>
      <ul class = "collapse list-unstyled" id = "homeSubmenu">
        <li>
          <a href="#NEWSubmenu" data-toggle = "collapse" aria-expanded = "false">NEW IN</a>
          <ul  class="ml-4 collapse list-unstyled" id="NEWSubmenu">
            <li>
              <a href="#">CASUAL SHIRT</a>
            </li>
            <li>
              <a href="#">POLO</a>
            </li>
            <li>
              <a href="#">T_SHIRTS</a>
            </li>
            <li>
              <a href="#">DRESS SHIRT</a>
            </li>
            <li>
              <a href="#">PANJABI/KURTA</a>
            </li>
            <li>
              <a href="#">CHINOS</a>
            </li>
            <li>
              <a href="#">JEANS</a>
            </li>
            <li>
              <a href="#">JOGGERS</a>
            </li>
            <li>
              <a href="#">PERFUME</a>
            </li>
            <li>
              <a href="#">SHORTS</a>
            </li>
            <li>
              <a href="#">BLAZER & SUITS</a>
            </li>
            <li>
              <a href="#">SNEAKERS</a>
            </li>
            <li>
              <a href="#">SOCKS</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#wintersubmenu" data-toggle="collapse" aria-expanded="false">WINTER</a>
          <ul class="ml-4 collapse list-unstyled" id="wintersubmenu">
            <li>
              <a href="#">JACKETS</a>
            </li>
            <li>
              <a href="#">SUITS & BLAZERS</a>
            </li>
            <li>
              <a href="#">HOODIES</a>
            </li>
            <li>
              <a href="#">SWEATSHIRT</a>
            </li>
            <li>
              <a href="#">SWEATER</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#stsubmenu" data-toggle="collapse" aria-expanded="false">SHIRTS & TEES</a>
          <ul class="ml-4 collapse list-unstyled" id="stsubmenu">
            <li>
              <a href="#">CASUAL SHIRTS</a>
            </li>
            <li>
              <a href="#">POLO</a>
            </li>
            <li>
              <a href="#">T SHIRTS</a>
            </li>
            <li>
              <a href="#">DRESS SHIRTS</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#pantssubmenu" data-toggle="collapse" aria-expanded="false">PANTS</a>
          <ul class="ml-4 collapse list-unstyled" id="pantssubmenu">
            <li>
              <a href="#">JEANS</a>
            </li>
            <li>
              <a href="#">CHINOS</a>
            </li>
            <li>
              <a href="#">DRESS PANTS</a>
            </li>
            <li>
              <a href="#">SHORTS</a>
            </li>
            <li>
              <a href="#">JOGERS/TROUSERs</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#footsubmenu" data-toggle="collapse" aria-expanded="false">FOOTWARE</a>
          <ul class="ml-4 collapse list-unstyled" id="footsubmenu">
            <li>
              <a href="#">LOAFERS</a>
            </li>
            <li>
              <a href="#">SNEAKERS</a>
            </li>
            <li>
              <a href="#">SANDALS</a>
            </li>
            <li>
              <a href="#">BOOTS</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#ACCESSORIESSUBMENU" data-toggle="collapse" aria-expanded="false">ACCESSORIES</a>
          <ul class="ml-4 collapse list-unstyled" id="ACCESSORIESSUBMENU">
            <li>
              <a href="#">BAGS</a>
            </li>
            <li>
              <a href="#">CAPS/HATS</a>
            </li>
            <li>
              <a href="#">MASK</a>
            </li>
            <li>
              <a href="#">UMBRELLA & MUG</a>
            </li>
            <li>
              <a href="#">SUNGLASS</a>
            </li>
            <li>
              <a href="#">WALLET/CARD</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">WOMEN</a>
    <ul class="collapse list-unstyled" id="pageSubmenu">
      <li>
          <a href="#WNEWSubmenu" data-toggle = "collapse" aria-expanded = "false">NEW IN</a>
          <ul  class="ml-4 collapse list-unstyled" id="WNEWSubmenu">
            <li>
              <a href="#">ETHNIC TOP</a>
            </li>
            <li>
              <a href="#">FASHION TOPS & SHIRT</a>
            </li>
            <li>
              <a href="#">SHRUGS & DUSTER</a>
            </li>
            <li>
              <a href="#">DRESS</a>
            </li>
            <li>
              <a href="#">BUTTOMS</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#wwintersubmenu" data-toggle="collapse" aria-expanded="false">WINTER</a>
          <ul class="ml-4 collapse list-unstyled" id="wwintersubmenu">
                   
<li>
                <a href="#">Overcoat</a>
</li>
<li>
                <a href="#">Hoodies</a>
</li>
<li>
                <a href="#">Jackets</a>
</li>
<li>
                <a href="#">Sweatshirt</a>
</li>
<li>
                <a href="#">Ponchos</a>
</li>
                </ul>
        </li>
        <li>
          <a href="#topssubmenu" data-toggle="collapse" aria-expanded="false">TOPS</a>
          <ul class=" ml-4 collapse list-unstyled" id="topssubmenu">
                   
<li>
                <a href="/women-ethnic-wear-kameez-kurtis">Kameez/Kurtis</a>
</li>
<li>
                <a href="/tops-3">Fashion Tops &amp; Shirts</a>
</li>
<li>
                <a href="/women-shrugs-dusters">Shrugs &amp; Duster</a>
</li>
<li>
                <a href="/women-winter-wear-summer-coat-blazers">Blazers</a>
</li>
                </ul>
        </li>
        <li>
          <a href="#bottoSUBMENU" data-toggle="collapse" aria-expanded="false">BOTTOMS</a>
          <ul class="ml-4 collapse list-unstyled" id="bottoSUBMENU">
                   
<li>
                <a href="/zarzain-jeans">Jeans</a>
</li>
<li>
                <a href="/leggings">Leggings</a>
</li>
<li>
                <a href="/zatzain-pants">ZARZAIN PANTS</a>
</li>
                </ul>
        </li>
        <li>
          <a href="#">SCARVES</a>
        </li>
        <li>
          <a href="#">BAGS</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#lifestyleSUBMENU" data-toggle="collapse" aria-expanded="false">LIFESTYLE</a>
      <ul class="collapse list-unstyled" id="lifestyleSUBMENU">
        <li>
          <a href="#">LUGGAGE</a>
        </li>
        <li>
          <a href="#">PERFUME</a>
        </li>
        <li>
          <a href="#">SUNGLASS</a>
        </li>
        <li>
          <a href="#">PRIVILEGE CARD</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#">GIFT VOUCHER</a>
    </li>
    <li>
      <a href="#WINTERSUBMENU" data-toggle="collapse" aria-expanded="false" style="color:red">WINTER</a>
      <ul class = "collapse list-unstyled" id="WINTERSUBMENU" >
        <li>
          <a href="{{route('ManFashion.index')}}">MEN</a>
        </li>
        <li>
          <a href="#">WOMEN</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#">SALE</a>
    </li>
    <li>
      <a href="#">STORE LOCATION</a>
    </li>
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
        <a class="nav-link text-dark" href="#">Winter</a>
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
        <a class="nav-link text-light" href="#">Winter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#">SALE</a>
      </li>
    </ul>
  </div>
  </div>
</nav>