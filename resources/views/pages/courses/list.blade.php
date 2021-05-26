@extends('layouts/contentLayoutMaster')

@section('title', 'Asignaturas') <!-- TODO: pensar en la internacionalización del front. -->

@section('vendor-style')
{{-- vendor css files --}}
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script> <!-- por qué no carga jquery desde los layouts? -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')
<!-- Zero configuration table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Asignaturas</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table id="coursesTable" class="table zero-configuration">
                <thead>
                  <tr>
                    <th>Asignatura</th>
                    <th>Subtitulo</th>
                    <th>Precio</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($courses as $course)
                  <tr>
                    <td>
                      {{ $course->title }}
                    </td>
                    <td>
                      {{ $course->subtitle }}
                    </td>
                    <td>
                      {{ $course->price }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Asignatura</th>
                    <th>Subtitulo</th>
                    <th>Precio</th>
                  </tr>
                </tfoot>                    
              </table>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--/ Zero configuration table -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#coursesTable').dataTable( {
            "language": {
               "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        } );
    } );
</script>

    @endsection
    @section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
    @endsection
    @section('page-script')
    {{-- Page js files --}}
    <script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script>
    @endsection
