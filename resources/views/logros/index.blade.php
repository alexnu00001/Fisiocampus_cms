@extends('layouts.app')
@section('title','Logros')

@section('content')
    <section class="content-header">
      <div class="card">
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" href="{{ route('logros.create') }}">Agregar nuevo</a>
        </h1>
              @include('flash::message')

            <div class="table-responsive">
                @include('logros.table')
            </div>
          </div>
</section>
@endsection

@section('page-script')
    @include('layouts.datatables_js')
@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/datatables.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.7/datatables.min.js"></script>

<script type="text/javascript">

  $(document).ready(function () {
    $('#logros_Table').dataTable({
        dom: 'Bfrtip',
        buttons: [
              'excel','csv','pdf','print'
      ]});
  });

</script>
@endpush