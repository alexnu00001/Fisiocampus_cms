<!-- BEGIN: Vendor JS-->
<script src="{{asset('vuexy/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('vuexy/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('vuexy/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('vuexy/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('vuexy/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<script src="{{asset('vuexy/app-assets/js/scripts/pages/app-invoice-list.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

{{-- Valdiate forms --}}
<script src="{{asset('vuexy/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/js/scripts/forms/form-validation.js')}}"></script>

{{-- DataTable --}}
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
