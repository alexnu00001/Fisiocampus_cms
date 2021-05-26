<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{{ route('countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

<li class="{{ Request::is('currencies*') ? 'active' : '' }}">
    <a href="{{ route('currencies.index') }}"><i class="fa fa-edit"></i><span>Currencies</span></a>
</li>

<li class="{{ Request::is('academicPrograms*') ? 'active' : '' }}">
    <a href="{{ route('academicPrograms.index') }}"><i class="fa fa-edit"></i><span>Academic Programs</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('programs*') ? 'active' : '' }}">
    <a href="{{ route('programs.index') }}"><i class="fa fa-edit"></i><span>Programs</span></a>
</li>

<li class="{{ Request::is('ofertaPlanEstudios*') ? 'active' : '' }}">
    <a href="{{ route('ofertaPlanEstudios.index') }}"><i class="fa fa-edit"></i><span>Oferta Plan Estudios</span></a>
</li>

<li class="{{ Request::is('ofertas*') ? 'active' : '' }}">
    <a href="{{ route('ofertas.index') }}"><i class="fa fa-edit"></i><span>Ofertas</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{{ route('permissions.index') }}"><i class="fa fa-edit"></i><span>Permissions</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('languages*') ? 'active' : '' }}">
    <a href="{{ route('languages.index') }}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

<li class="{{ Request::is('people*') ? 'active' : '' }}">
    <a href="{{ route('people.index') }}"><i class="fa fa-edit"></i><span>People</span></a>
</li>

<li class="{{ Request::is('students*') ? 'active' : '' }}">
    <a href="{{ route('students.index') }}"><i class="fa fa-edit"></i><span>Students</span></a>
</li>

<li class="{{ Request::is('grades*') ? 'active' : '' }}">
    <a href="{{ route('grades.index') }}"><i class="fa fa-edit"></i><span>Grades</span></a>
</li>

<li class="{{ Request::is('studyPlans*') ? 'active' : '' }}">
    <a href="{{ route('studyPlans.index') }}"><i class="fa fa-edit"></i><span>Study Plans</span></a>
</li>

<li class="{{ Request::is('ofertaTypes*') ? 'active' : '' }}">
    <a href="{{ route('ofertaTypes.index') }}"><i class="fa fa-edit"></i><span>Oferta Types</span></a>
</li>

<li class="{{ Request::is('contentTypes*') ? 'active' : '' }}">
    <a href="{{ route('contentTypes.index') }}"><i class="fa fa-edit"></i><span>Content Types</span></a>
</li>

<li class="{{ Request::is('tiposOdas*') ? 'active' : '' }}">
    <a href="{{ route('tiposOdas.index') }}"><i class="fa fa-edit"></i><span>Tipos Odas</span></a>
</li>

<li class="{{ Request::is('cursos*') ? 'active' : '' }}">
    <a href="{{ route('cursos.index') }}"><i class="fa fa-edit"></i><span>Cursos</span></a>
</li>

<!-- <li class="{{ Request::is('secuenciaAprendizajes*') ? 'active' : '' }}">
    <a href="{{ route('secuenciaAprendizajes') }}"><i class="fa fa-edit"></i><span>Secuencias de Aprendisaje</span></a>
</li> -->

<li class="{{ Request::is('pais*') ? 'active' : '' }}">
    <a href="{{ route('pais.index') }}"><i class="fa fa-edit"></i><span>Pais</span></a>
</li>

<li class="{{ Request::is('grados*') ? 'active' : '' }}">
    <a href="{{ route('grados.index') }}"><i class="fa fa-edit"></i><span>Grados</span></a>
</li>

<li class="{{ Request::is('monedas*') ? 'active' : '' }}">
    <a href="{{ route('monedas.index') }}"><i class="fa fa-edit"></i><span>Monedas</span></a>
</li>

<li class="{{ Request::is('tipoOfertas*') ? 'active' : '' }}">
    <a href="{{ route('tipoOfertas.index') }}"><i class="fa fa-edit"></i><span>Tipo Ofertas</span></a>
</li>

<li class="{{ Request::is('planEstudios*') ? 'active' : '' }}">
    <a href="{{ route('planEstudios.index') }}"><i class="fa fa-edit"></i><span>Plan Estudios</span></a>
</li>

<li class="{{ Request::is('secuenciaAprendizajes*') ? 'active' : '' }}">
    <a href="{{ route('secuenciaAprendizajes.index') }}"><i class="fa fa-edit"></i><span>Secuencia Aprendizajes</span></a>
</li>

<li class="{{ Request::is('odas*') ? 'active' : '' }}">
    <a href="{{ route('odas.index') }}"><i class="fa fa-edit"></i><span>Odas</span></a>
</li>

<li class="{{ Request::is('lenguajes*') ? 'active' : '' }}">
    <a href="{{ route('lenguajes.index') }}"><i class="fa fa-edit"></i><span>Lenguajes</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{{ route('personas.index') }}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

<li class="{{ Request::is('tipoContenidos*') ? 'active' : '' }}">
    <a href="{{ route('tipoContenidos.index') }}"><i class="fa fa-edit"></i><span>Tipo Contenidos</span></a>
</li>

<li class="{{ Request::is('tipoOdas*') ? 'active' : '' }}">
    <a href="{{ route('tipoOdas.index') }}"><i class="fa fa-edit"></i><span>Tipo Odas</span></a>
</li>

<li class="{{ Request::is('estudiantes*') ? 'active' : '' }}">
    <a href="{{ route('estudiantes.index') }}"><i class="fa fa-edit"></i><span>Estudiantes</span></a>
</li>

<li class="{{ Request::is('tipoProfesors*') ? 'active' : '' }}">
    <a href="{{ route('tipoProfesors.index') }}"><i class="fa fa-edit"></i><span>Tipo Profesors</span></a>
</li>

<li class="{{ Request::is('tipoCursos*') ? 'active' : '' }}">
    <a href="{{ route('tipoCursos.index') }}"><i class="fa fa-edit"></i><span>Tipo Cursos</span></a>
</li>

<li class="{{ Request::is('tipoAlumnos*') ? 'active' : '' }}">
    <a href="{{ route('tipoAlumnos.index') }}"><i class="fa fa-edit"></i><span>Tipo Alumnos</span></a>
</li>

<li class="{{ Request::is('tipoPagos*') ? 'active' : '' }}">
    <a href="{{ route('tipoPagos.index') }}"><i class="fa fa-edit"></i><span>Tipo Pagos</span></a>
</li>

<li class="{{ Request::is('sedes*') ? 'active' : '' }}">
    <a href="{{ route('sedes.index') }}"><i class="fa fa-edit"></i><span>Sedes</span></a>
</li>

<li class="{{ Request::is('tipoCongresos*') ? 'active' : '' }}">
    <a href="{{ route('tipoCongresos.index') }}"><i class="fa fa-edit"></i><span>Tipo Congresos</span></a>
</li>

<li class="{{ Request::is('estatuses*') ? 'active' : '' }}">
    <a href="{{ route('estatuses.index') }}"><i class="fa fa-edit"></i><span>Estatuses</span></a>
</li>

<li class="{{ Request::is('categoriaCongresos*') ? 'active' : '' }}">
    <a href="{{ route('categoriaCongresos.index') }}"><i class="fa fa-edit"></i><span>Categoria Congresos</span></a>
</li>

<li class="{{ Request::is('direccions*') ? 'active' : '' }}">
    <a href="{{ route('direccions.index') }}"><i class="fa fa-edit"></i><span>Direccions</span></a>
</li>

<li class="{{ Request::is('profesors*') ? 'active' : '' }}">
    <a href="{{ route('profesors.index') }}"><i class="fa fa-edit"></i><span>Profesors</span></a>
</li>

<li class="{{ Request::is('congresos*') ? 'active' : '' }}">
    <a href="{{ route('congresos.index') }}"><i class="fa fa-edit"></i><span>Congresos</span></a>
</li>

<li class="{{ Request::is('modalidades*') ? 'active' : '' }}">
    <a href="{{ route('modalidades.index') }}"><i class="fa fa-edit"></i><span>Modalidades</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>


<li class="{{ Request::is('logros*') ? 'active' : '' }}">
    <a href="{{ route('logros.index') }}"><i class="fa fa-edit"></i><span>Logros</span></a>
</li>
<li class="{{ Request::is('autors*') ? 'active' : '' }}">
    <a href="{{ route('autors.index') }}"><i class="fa fa-edit"></i><span>Autors</span></a>
</li>

<li class="{{ Request::is('articulos*') ? 'active' : '' }}">
    <a href="{{ route('articulos.index') }}"><i class="fa fa-edit"></i><span>Articulos</span></a>

</li>

<li class="{{ Request::is('controlSuscripcions*') ? 'active' : '' }}">
    <a href="{{ route('controlSuscripcions.index') }}"><i class="fa fa-edit"></i><span>Control Suscripcions</span></a>
</li>

<li class="{{ Request::is('escuelas*') ? 'active' : '' }}">
    <a href="{{ route('escuelas.index') }}"><i class="fa fa-edit"></i><span>Escuelas</span></a>
</li>

<li class="{{ Request::is('inscripcionTipos*') ? 'active' : '' }}">
    <a href="{{ route('inscripcionTipos.index') }}"><i class="fa fa-edit"></i><span>Inscripcion Tipos</span></a>
</li>

<li class="{{ Request::is('inscripcions*') ? 'active' : '' }}">
    <a href="{{ route('inscripcions.index') }}"><i class="fa fa-edit"></i><span>Inscripcions</span></a>
</li>

<li class="{{ Request::is('ofertaInscripcions*') ? 'active' : '' }}">
    <a href="{{ route('ofertaInscripcions.index') }}"><i class="fa fa-edit"></i><span>Oferta Inscripcions</span></a>
</li>

<li class="{{ Request::is('ofertaCategorias*') ? 'active' : '' }}">
    <a href="{{ route('ofertaCategorias.index') }}"><i class="fa fa-edit"></i><span>Oferta Categorias</span></a>
</li>

<li class="{{ Request::is('estudianteOfertas*') ? 'active' : '' }}">
    <a href="{{ route('estudianteOfertas.index') }}"><i class="fa fa-edit"></i><span>Estudiante Ofertas</span></a>
</li>

<li class="{{ Request::is('tipoCalificacions*') ? 'active' : '' }}">
    <a href="{{ route('tipoCalificacions.index') }}"><i class="fa fa-edit"></i><span>Tipo Calificacions</span></a>
</li>

<li class="{{ Request::is('calificacionOfertaCursos*') ? 'active' : '' }}">
    <a href="{{ route('calificacionOfertaCursos.index') }}"><i class="fa fa-edit"></i><span>Calificacion Oferta Cursos</span></a>
</li>

<li class="{{ Request::is('escalas*') ? 'active' : '' }}">
    <a href="{{ route('escalas.index') }}"><i class="fa fa-edit"></i><span>Escalas</span></a>
</li>

