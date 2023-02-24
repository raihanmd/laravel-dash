@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
// $isNavbar = false;
@endphp

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@isset($configData["layout"])
@include(($configData['layout'] === 'blank') ? 'layouts.blankLayout' : 'layouts.contentNavbarLayout')
@endisset
