@extends('frontend.layout.master')
@section('content')
<img src="{{ asset('admin/assets/images/default/police-com-banner.jpg') }}" alt="" class="img-fluid">
<section class="pb-5 pt-5">
  <div class="container pb-5">
     <div class="ml-5 mr-5">
      <div class="card shadow border-0">
          <div class="card-body border-0 rounded" style="background-color: #B2F9FC">
              <p class="text-center text-primary">The full form of GD is General Diary; GD is the general information that needs to be given in a matter if one wants to get legal assistance. This is the first step in police or legal action. It is important to keep the GD even if you take legal action in the future.</p>
          </div>
      </div>
     </div>

     <div class="mt-5">
      <div class="row">
          <div class="col-sm-9">
              <div class="card">
                  <div class="card-header">
                      <p><b class="text-success">Now let's know what to mention in GD:</b></p>
                  </div>
                  <div class="card-body">
                      <ol>
                          <li>Write to the Officer-in-Charge of the police station and write the name and address of the police station.</li>
                          <li>Subject : 'Application for doing GD' - should be written like this.</li>
                          <li>If there is an apprehension of committing a crime, the reasons for apprehension must be mentioned in the GD.</li>
                          <li>In case of threat, place, date, time of threat, name of witness, father's name and full address should be mentioned.</li>
                          <li>If the threat maker is known, his/her name, father's name and full address should be mentioned.</li>
                          <li>If unknown, describe their identification.</li>
                          <li>GD should be registered and the matter should be investigated properly and legal action should be taken.</li>
                          <li>Name, signature, father's name, full address and date of the last GD holder should be entered.</li>
                      </ol>

                      <div class="float-right">
                          <a href="{{route('gd_sample')}}" class="btn btn-info">Sample of GD</a>
                          <a href="{{ route('general_diary_register') }}" class="btn btn-primary">gd</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-3">
              <div class="card">
                  <div class="card-header">
                      <p><b class="text-success">Important Links</b></p>
                  </div>
                  <div class="card-body">
                      <ul>
                          <li><a href="#" class="">Near Police Station</a></li>
                          <hr>
                          <li><a href="#" class="">Hotlines</a></li>
                          <hr>
                          <li><a href="#" class="">Wanted List</a></li>
                          <hr>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
     </div>
  </div>
</section>
@endsection
