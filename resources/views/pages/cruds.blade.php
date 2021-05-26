
@extends('layouts/contentLayoutMaster')

@section('title', 'CRUDS')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">
@endsection

@section('content')
  {{-- Dashboard Cruds Starts --}}
  <section id="dashboard-ecommerce">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                <h1>CRUDS</h1>       
                </div>
                
                <div class="card-content">

                
                <ul>

                  <b>catalogs</b>
                  <li><a href="/countries">countries</a></li>
                  <li><a href="/currencies">currencies</a></li>
                  <li><a href="/degrees">degrees</a></li>

                  <b>flow</b>  
                  <li><a href="/academicPrograms">academic programs (ofertas)</a></li>
                  <li><a href="/courses">courses</a></li>
                  <li><a href="/programs">programs (plan de estudios)</a></li>

                  
                </ul>

                </div>
            </div>
        </div>
  {{-- Dashboard Cruds ends --}}
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
@endsection

