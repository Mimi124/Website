<meta charset="utf-8" />
<title> @yield('page_title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('backend/assets/images/logo-color.png') }}">

<!-- Bootstrap css -->
<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App css -->
<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-iconpicker.css') }}">
<!-- icons -->

<link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-iconpicker.css') }}">
<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" />
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
<!-- Bootstrap-Iconpicker -->
<link rel="stylesheet" href="dist/css/bootstrap-iconpicker.min.css" />

<!-- yajra dataTables -->


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />


<!-- dataTables end -->

{{-- <!--Quilljs Plugins css -->
     <link href="{{ asset('backend/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" /> --}}



<!--Select2 Plugins css -->
<link href="{{ asset('backend/assets/libs/mohithg-switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"
    type="text/css" />


<link href="{{ asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- toastr -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<!-- toastr -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Head js -->
<script src="{{ asset('backend/assets/js/head.js') }}"></script>
