@extends('admin.layout.master')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-cellphone"></i>
          </span>Case Details
        </h3>
      </div>

      <div class="card">
          <div class="card-body">
              <span class="h5 font-weight-bold">Complainant Name:</span><span>{{ $complain->name }}</span><br>
              <span class="h5 font-weight-bold">Father's Name: </span><span>{{ $complain->father_name }}</span><br>
              <span class="h5 font-weight-bold">Department: </span><span>{{ $complain->division->bn_name }}</span><br>
              <span class="h5 font-weight-bold">District: </span><span>{{ $complain->district->bn_name }}</span><br>
              <span class="h5 font-weight-bold">Zilla: </span><span>{{ $complain->upazila->bn_name }}</span><br>
              <span class="h5 font-weight-bold">Police station: </span><span>{{ $complain->policestation->name }}</span><br>
              <span class="h5 font-weight-bold">NID: </span><span>{{ $complain->nid }}</span><br>
              <span class="h5 font-weight-bold">Phone Number: </span><span>{{ $complain->phone_no }}</span><br>
              <span class="h5 font-weight-bold">Email: </span><span>{{ $complain->email }}</span><br><br>
              <span class="h5 font-weight-bold">Description: </span><span>{!! $complain->description !!}</span><br>
              <span class="h5 font-weight-bold">Document </span><span><a href="{{ asset('admin/assets/complain/'.$complain->document) }}">{{ $complain->document }}</a></span><br>
              <span class="h5 font-weight-bold">Status: </span><span>{{ $complain->status}}</span><br>
          </div>
      </div>
</div>

@endsection
