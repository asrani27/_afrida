@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- support-section start -->
        <div class="row">
            <div class="col-sm-6">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">{{$peserta}}</h2>
                        <span class="text-c-blue">Data Peserta</span>
                        <p class="mb-3 mt-3">Total Peserta</p>
                    </div>
                    <div id="support-chart"></div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">{{$instruktur}}</h2>
                        <span class="text-c-green">Data Instruktur</span>
                        <p class="mb-3 mt-3">Total Instruktur.</p>
                    </div>
                    <div id="support-chart1"></div>


                </div>
            </div>

        </div>
        <!-- support-section end -->
    </div>



</div>

@endsection

@push('js')

@endpush