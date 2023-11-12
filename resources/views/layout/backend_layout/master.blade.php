<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layout.backend_layout.body.css')
    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            @include('layout.backend_layout.body.header')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('layout.backend_layout.body.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @yield('content')

                <!-- Footer Start -->
                @include('layout.backend_layout.body.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- jQuery CDN -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Bootstrap CDN -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap-Iconpicker Bundle -->
<script type="text/javascript" src="dist/js/bootstrap-iconpicker.bundle.min.js"></script>

        <!-- Chart JS -->
        <script src="{{asset('backend/assets/libs/chart.js/Chart.bundle.min.js') }}"></script>

        <script src="{{asset('backend/assets/libs/moment/min/moment.min.js') }}"></script>
        <script src="{{asset('backend/assets/libs/jquery.scrollto/jquery.scrollTo.min.js') }}"></script>

        <!-- Chat app -->
        <script src="{{asset('backend/assets/js/pages/jquery.chat.js') }}"></script>

        <!-- Todo app -->
        <script src="{{asset('backend/assets/js/pages/jquery.todo.js') }}"></script>


        <!-- Dashboard init JS -->
        <script src="{{asset('backend/assets/js/pages/dashboard-3.init.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{asset('backend/assets/js/pages/datatables.init.js') }}"></script>

        <!-- App js-->
        <script src="{{asset('backend/assets/js/app.min.js') }}"></script>


        {{-- ICONS --}}
        <script src="{{asset('backend/assets/js/bootstrap-iconpicker.bundle.min.js') }}"></script>

        {{-- SweetAlert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type='text/javascript'>
        $(function(){
            $(document).on('click','#delete',function(e){
                e.preventDefault();
                var link = $(this).attr('href');



                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = link
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })






            });
        });

        </script>

          <!-- datatables js -->
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

          <!-- third party js ends -->



        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
         @if(Session::has('message'))
         var type = "{{ Session::get('alert-type','info') }}"
         switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;



            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
         }
         @endif
        </script>

        @stack('scripts')

    </body>
</html>
