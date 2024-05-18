@extends('admin.layout.master')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-cellphone"></i>
            </span>Wanted Criminal Details update
        </h3>
    </div>

    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Update Criminal Information</h1>

            <form class="forms-sample" id="wantedForm" action="{{ url('/admin/wantedlist/update/'.$wanted->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}
                <div class="form-group">
                    <label for="title">name<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name"  class="form-control" value={{ $wanted->name }} />
                </div>
                <div class="form-group">
                    <label for="title">father's name<span class="text-danger">*</span></label>
                    <input type="text" name="father_name" id="father_name" class="form-control" value={{ $wanted->father_name }} />
                </div>

                <div class="form-group">
                    <label for="title">address<span class="text-danger">*</span></label>
                    <textarea type="text" name="address" id="address" class="form-control" value={{ $wanted->address }}>{{ $wanted->address }}</textarea>
                </div>

                <div class="form-group">
                    <label for="title">Gender<span class="text-danger">*</span></label>
                    <select name="gander" id="gander" class="form-control" value={{ $wanted->gander }}>
                        <option selected value={{ $wanted->gander }}>{{ $wanted->gander }}</option>
                        <option value="male">male</option>
                        <option value="female">woman</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>description<span> (Optional)</span></label>
                    <textarea type="text" name="details" rows="5" class="form-control" value={{ $wanted->details }}>{{ $wanted->details }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">picture<span class="text-danger">*</span></label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                {{-- <input type="text" name="status" id="photo" class="form-control"  required /> --}}
                <div class="float-right">
                    <button type="submit" class="btn  btn-sm btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
