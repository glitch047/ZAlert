@extends('frontend.layout.master')
@section('content')
  <!-- Categories section-->
  <img src="{{ asset('admin/assets/images/default/police-com-banner.jpg') }}" alt="" class="img-fluid">
  <section class="pb-5 pt-5">
    <div class="container pb-5">
       <div class="ml-5 mr-5">
        <div class="card shadow border-0">
            <div class="card-body border-0 rounded" style="background-color: #B2F9FC">
                <p class="text-center text-primary">You can easily present any opinion or complaint to the authorities through this website. It is an online platform for central complaint management operated by Bangladesh Police. Feedback or complaint management about Bangladesh Police will make people more confident about police and make police more responsible. Feedback or complaint management in the light of National Justice Law will ensure transparency and accountability of Pakistan Police.</p>
            </div>
        </div>
       </div>

       <div class="mt-5">
            <div class="card">
                <div class="card-body">
                        <form class="forms-sample" id="complainForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="division_id">department<span class="text-danger">*</span></label>
                                        <select name="division_id" id="division_id" class="form-control" required>
                                            <option selected disabled>Select category</option>
                                            @foreach ($division as $item )
                                                    <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="district_id">district<span class="text-danger">*</span></label>
                                        <select name="district_id" id="district_id" class="form-control" required>
                                            <option selected disabled>Select the district</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="upazila_id">Zilla<span class="text-danger">*</span></label>
                                        <select name="upazila_id" id="upazila_id" class="form-control" required>
                                            <option selected disabled>Select Zilla</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="police_station">police station<span class="text-danger">*</span></label>
                                        <select name="police_station" id="police_station" class="form-control" required>
                                            <option selected disabled>Select Zilla</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">name<span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="father_name">father's name<span class="text-danger">*</span></label>
                                        <input type="text" name="father_name" id="father_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid">NID<span class="text-danger">*</span></label>
                                        <input type="text" name="nid" id="nid" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_no">phone number<span class="text-danger">*</span></label>
                                        <input type="text" name="phone_no" id="phone_no" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">email<span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">description<span class="text-danger">*</span></label>
                                        <textarea id="description" class="description" name="description" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">File<span class="text-danger">*</span></label>
                                        <input type="file" name="document" id="document" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn  btn-sm btn-gradient-primary mr-2">Submit</button>
                                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
       </div>
    </div>
  </section>
  <!-- Resources section-->

  <script>
    $('#division_id').change(function() {
        var divisionID = $(this).val();
        if (divisionID) {
            //console.log(companyID);
            $.ajax({
                type: "GET",
                url: "/complaint/registration/district/" + divisionID,
                success: function(res) {
                    //console.log(res);
                    if (res) {

                        $("#district_id").empty();
                        $("#district_id").append('<option>Select the district</option>');
                        $.each(res, function(key, value) {
                            $("#district_id").append('<option value="' + value.id + '">' + value.bn_name +
                                '</option>');
                                //console.log(value);
                        });

                    } else {

                        $("#district_id").empty();
                    }
                }
            });
        } else {
            $("#district_id").empty();
            $("#upazila_id").empty();
            $("#plice_station").empty();
        }
    });

    $('#district_id').on('change', function() {
        var districtID = $(this).val();
        if (districtID) {

            $.ajax({
                type: "GET",
                url: "/complaint/registration/upazila/" + districtID,
                success: function(res) {
                    // console.log(res);
                    if (res) {
                        $("#upazila_id").empty();
                        $("#upazila_id").append('<option>Select Zilla</option>');
                        $.each(res, function(key, value) {
                            $("#upazila_id").append('<option value="' + value.id + '">' + value.bn_name +
                                '</option>');
                        });

                    } else {
                        $("#upazila_id").empty();
                    }
                }
            });
        } else {
            $("#upazila_id").empty();
            $("#plice_station").empty();
        }
    });

    $('#upazila_id').on('change', function() {
        var upazila_id = $(this).val();
        if (upazila_id) {

            $.ajax({
                type: "GET",
                url: "/complaint/registration/policestation/" + upazila_id,
                success: function(res) {
                    // console.log(res);
                    if (res) {
                        $("#police_station").empty();
                        $("#police_station").append('<option>Select Zilla</option>');
                        $.each(res, function(key, value) {
                            $("#police_station").append('<option value="' + value.id + '">' + value.name +
                                '</option>');
                        });

                    } else {
                        $("#police_station").empty();
                    }
                }
            });
        } else {
            $("#police_station").empty();
        }
    });

    $(document).ready(function() {
        $('.description').summernote({
            tabsize: 2,
            height: 200
        });
    });



    $('#complainForm').on('submit', function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var myformData = new FormData($('#complainForm')[0]);
                $.ajax({
                    type: "post",
                    url: "/complaint/registration/add",
                    data: myformData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Once your complaint is fully registered, someone from your police station will contact you as soon as possible.',
                            timer: 1000,
                            showConfirmButton: false,
                        });
                        console.log(response);
                        location.reload();
                    },
                    error: function(error) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'Error',
                            title: 'Data Not Deleted',
                            showConfirmButton: false,
                            timer: 1000
                        });
                        console.log(error);
                        alert("Data Not Save");
                    }
                });
            });
    </script>
@endsection
