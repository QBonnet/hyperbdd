@extends('app')

@section('content')


  <div class="container box">
   <h1 align="center" class="color-title">LIST OF DATA BASES </h1><br />

   <div class="form-group">
    <input type="text" name="country_name" id="country_name" onclick="javascript:afficher_cacher('hide_part');" class="form-control input-lg" placeholder="Enter Base Name" />
    <div id="countryList">
    </div>



   </div>
   {{ csrf_field() }}


   <div id=hide_part>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Application Type</th>
                <th scope="col">Description</th>
                <th scope="col">See</th>
                <th scope="col">Download</th>
                <th scope="col">Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php $compteurDeBase = 0; ?>

            @foreach($bases as $key=>$base)


                <?php
                    if ($base->reach == 'public') {
                ?>

                <tr>
                    <th scope="row">{{$compteurDeBase}}</th>
                    <td>{{$base->dbname}}</td>
                    <td>{{$base->applicationType->application_name}}</td>
                    <td>{{$base['description']}}</td>
                    <td>
                        <a class="btn btn-primary btn-xl" onclick="window.location.href='{{'/bases/'.$base->id}}'">See</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-xl" onclick="downloadBase({{$base->id}})" href="#">Download</a>
                    </td>
                    <td>
                        <img
                            src="images/flower.jpg"
                            alt="database main picture"
                            style="max-width: 100%;
                                    height: auto;"
                        />
                    </td>
                </tr>

                <?php
                    $compteurDeBase += 1;

                    }
                ?>

            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $bases->links() }}
    </div>
</div>


  </div>




<script  type="text/javascript">

function afficher_cacher(id)
{

    document.getElementById(id).style.visibility="hidden";
    return true;
}

$(document).ready(function(){

 $('#country_name').keyup(function(){
  //document.getElementById(hide_part).style.display = none;
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('list.action') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();
                    $('#countryList').html(data);
          }
         });
        }

    });

    $(document).on('click', 'li', function(){
        $('#country_name').val($(this).text());
        $('#countryList').fadeOut();
    });

});
</script>

@endsection



