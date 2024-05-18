@extends('frontend.layout.master')
@section('content')


  <img src="{{ asset('admin/assets/images/default/police-com-banner.jpg') }}" alt="" class="img-fluid">
  <section class="pb-5 pt-5">
    <div class="container pb-5">
       <div class="ml-5 mr-5">
        <div class="card shadow border-0">
            <div class="card-body border-0 rounded" style="background-color: #B2F9FC">
                <p class="text-center text-primary">You can easily present any opinion or complaint to the authorities through this website. It is an online platform for central complaint management operated by Bangladesh Police. Feedback or complaint management about Bangladesh Police will make people more confident about police and make police more responsible. Feedback or complaint management in the light of National Justice Law will ensure transparency and accountability of Pakistan Police.
                </p>
            </div>
        </div>
       </div>

       <div class="mt-5">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <p><b class="text-success">Procedures for Submitting Feedback or Complaints</b></p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Click on "Your Feedback/Complaint" button below to submit any kind of feedback or complaint regarding Police.</li>
                            <li>Fill the required information including your mobile number and click on "Save and Next Step" button.</li>
                            <li>The system will provide you with an auto generated code. Send the said code via SMS to 6969 from your mobile.</li>
                            <li>Enter the code received via SMS on your mobile and click on the "Save and Next Step" button.</li>
                            <li>Submit your comments or complaints in brief.</li>
                            <li>If you want to make a new comment or complaint, click on the "Your Complaint" button again.</li>
                        </ul>

                        <div class="float-right">
                            <a href="{{ route('complaint_reg')}}" class="btn btn-primary">your complaint<br>(Complaint)</a>
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
  <!-- Resources section-->
@endsection
