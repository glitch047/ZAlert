@extends('admin.layout.master')
@section('content')

<select name="division" id="department" class="form-control department input-lg">
    <option selected disabled>Select category</option>
   </select>
   <br />
   <select name="district" id="district" class="form-control district input-lg">
    <option selected disabled>Select the district</option>
   </select>
   <br />
   <select name="upazila" id="Zilla" class="form-control Zilla input-lg">
    <option selected disabled>Select Zilla</option>
</select>

<script>
    $(document).ready(function(){

     load_json_data('department');

     function load_json_data(id, parent_id)
     {
      var html_code = '';

      $.getJSON('categories.json', function(data){

       html_code = '<option selected disabled>'+id+ ' select</option>';

       $.each(data, function(key, value){

        if(id == 'department')
        {
            // console.log(value.parent_id)
         if(value.parent_id == null)
         {

          html_code += '<option  value="'+value.id+'">'+value.name+'</option>';
          //console.log(value.name)
         }
        }
        else
        {
         if(value.parent_id == parent_id)
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
          //console.log(value.name)
         }
        }
       });
       $('#'+id).html(html_code);
       //console.log(html_code)
      });

     }

     $(document).on('change', '#department', function(){
      var division = $(this).val();
      if(division != '')
      {
       load_json_data('district', division);
      }
      else
      {
       $('#district').html('<option selected disabled >Select the district</option>');
       $('#Zilla').html('<option selected disabled >Select Zilla</option>');
      }
     });
     $(document).on('change', '#district', function(){
      var upazila = $(this).val();
      if(upazila != '')
      {
       load_json_data('Zilla', upazila);
      }
      else
      {
       $('#Zilla').html('<option selected disabled>Select Zilla</option>');
      }
     });
    });
    </script>
@endsection
