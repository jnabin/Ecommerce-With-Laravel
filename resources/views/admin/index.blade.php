@extends('layout.adminMainLayout')
@section('content')
<div class="modal fade" id="serialModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add SKU Serial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="serialform" method="POST" action="{{route('AdminHome.addSerial')}}">
                @csrf
                <div class="form-group">
                  <label for="name" class="col-form-label">Serial Name:</label>
                  <input type="text" onchange="check()" class="form-control" name="series_name" id="name">
                  <div class="error_text">
                    
                  </div>
                  
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="validate()" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Added</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p class="text-success">{{session('added')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
@if(session()->has('added'))
<script>
var myModal = new bootstrap.Modal(document.getElementById('myModal'));
myModal.toggle();

</script>
@endif


  <script>
      function validate(){
   
          if($("#name").val().length<1){
            $(".error_text").empty();
            $(".error_text").append(`<span class="text-danger series_name_error">Serial Name is required</span>`); 
          }

          if($("#name").val().length>15){
            $(".error_text").empty();
            $(".error_text").append(`<span class="text-danger series_name_error">Serial Name may not be greater than 15 characters</span>`); 
          }
        if ($(".series_name_error").length<1 && $("#name").val().length>0 && $("#name").val().length<15) {
            alert("submitting");
          $("#serialform").submit();
        }
      }

      function check(){
        
        var name = $("#name").val();
        $.ajax({
            url:'/validate-ajax',
            type:'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                series_name : name
               
            },
            dataType: 'json',
            
            beforeSend:function(){
               
            },
            success:function(data){
                
                if(data.status == 0){
                   
                    $.each(data.error, function(prefix, val){
                        $(".error_text").empty();
                        $(".error_text").append(`<span class="text-danger series_name_error">${val[0]}</span>`); 
                    });
                    
                }else{
                   
                    $(".error_text").empty();
                }
            },
            error: function() {
        alert('ajax call failed...');
    }

        });
      }
      
  </script>
@endsection