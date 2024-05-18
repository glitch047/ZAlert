@extends('frontend.layout.master')
@section('content')

<img src="{{ asset('admin/assets/images/default/en.png') }}" alt="" class="img-fluid w-100">

<section class="pt-5 container mb-5">
    <div class="card shadow border-0">
        <div class="card-body">
            <h3 class="text-center text-primary">Welcome to Help Cell</h3>
            <br>
            <p>To provide better service to expatriates, a dedicated cell named Expert Help Cell under AIG (Expert Cell) has been established at Police Headquarters, Islamabas, Pakistan. Expert from abroad and during their stay at home (Pakistan) can submit their complaints and seek help at the following contacts:
            </p>
            <br>
            <br>
            <h6>Cell: +92 123456677</h6>
            <h6>Cell: +92 123456688</h6>
            <h6>Email: Experthelp@police.gov.pk</h6>

            <br>
            <p>A focal point of the rank of Additional Superintendent has been appointed in all headquarters units (District) to monitor all expert issues. Expert can also file a complaint at the nearest police station. The officers in charge of the police station have been directed to ensure immediate action on their complaints.</p>
        </div>
    </div>
</section>

@endsection
