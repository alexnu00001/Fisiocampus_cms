@extends('layouts.app')

@section('content')

  <div class="row" id="table-head">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tabla de Permisos de Rol {{$role->name}}</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Elija los permisos con los que debe de contar el Rol elegido</p>
          </div>
          <div class="table-responsive">
            <table class="table mb-0">
              <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Permiso</th>
                <th scope="col">Activar/Desactivar</th>
              </tr>
              </thead>
              <tbody>
              @foreach($permisos as $permiso)
                <tr>
                  <th scope="row">{{$permiso->id}}</th>
                  <td>{{$permiso->name}}</td>
                  <td>
                    <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                      <input type="checkbox" class="custom-control-input permission-change" id="permission_{{$permiso->id}}" data-idpermision="{{$permiso->id}}" data-idrole="{{$role->id}}" @if($permiso->activo === true) checked @endif>
                      <label class="custom-control-label" for="permission_{{$permiso->id}}"></label>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('scripts')
  <script>
    $(document).ready(function(){
      $('.permission-change').on('change',function(){
        if ($(this).is(":checked"))
        {
          let idRole = $(this).data('idrole');
          let idPermission= $(this).data('idpermision');
          changePermission(idRole,idPermission,'attach');
        }else{
          let idRole = $(this).data('idrole');
          let idPermission= $(this).data('idpermision');
          changePermission(idRole,idPermission,'detach');
        }

      });
    });

    function changePermission(idRole,idPermission,type){

      var url = "{{route('updatePermissionRole')}}";
      $.ajax({
        method: "POST",
        url: url,
        data: {
          idRole : idRole,
          idPermission : idPermission,
          type : type,
          "_token": '{{ csrf_token() }}'
        }
      })
        .done(function( data ) {
          console.log(data);
          if(data[0] == null){
            $('.localidadselect')
              .find('option')
              .remove()
              .end()
            ;
            $('.municipio').val('');
            $('.estado').val('');
            swal(
              'Error.',
              'No se encontraron registros con ese CP',
              'error'
            )
            return;
          }
          $('.localidadselect')
            .find('option')
            .remove()
            .end()
          ;

          $.each( data, function( key, value ) {
            $('.localidadselect').append($('<option>', {
              value: value.asentamiento,
              text: value.asentamiento,
              style: 'text-align:right'
            }));
          });
          $('.municipio').val(data[0].municipio);
          $('.estado').val(data[0].estado);

        }).fail(function() {
        swal(
          'Error.',
          'Existe un error con su sesión. Intente actualizando la página o cerrando y abriendo sesión. si el problema continúa reporte con soporte.',
          'error'
        )
      });
    }
  </script>
@endpush
