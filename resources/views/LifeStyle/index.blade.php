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
        <li class= "d-inline-block p-3 ml-3 mr-1 ">{{$item->subCategory_name}}</li>            
        @else
        
        <li class= "d-inline-block p-3 mx-1 ">{{$item->subCategory_name}}</li>
        
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
@endsection