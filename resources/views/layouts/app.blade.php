@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

  <!DOCTYPE html>
{{-- {!! Helper::applClasses() !!} --}}
@php
  $configData = Helper::applClasses();
@endphp

<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
      data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>


  <title>@yield('title') - Fisio Campus Admin</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

  {{-- Include core + vendor Styles --}}
  @include('panels/styles')
  @include('layouts.datatables_css')

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">

  <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

</head>



@isset($configData["mainLayoutType"])
  @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalLayoutMaster' :
  'layouts.verticalLayoutMaster' ))
@endisset

