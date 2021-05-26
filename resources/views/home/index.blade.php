@extends('layout.mainlayout')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md px-0">
        <a href="{{route('ManFashion.index')}}"><img class = "men" src="/image/man_winter.jpg" alt="stylish model"></a>
      </div>
      <div class="col-md px-0">
        <a href="{{route('WomenFashion.index')}}"><img class = "women" src="/image/woman_winter.jpg" alt="stylish model"></a> 
      </div>
    </div>
  </div>
@endsection
