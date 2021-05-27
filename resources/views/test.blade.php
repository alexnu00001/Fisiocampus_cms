@extends('layouts.vuexy')
@section('content')
<div class="card-datatable table-responsive pt-0">
    <table id="example" class="user-list-table table">
        <thead class="thead-light">
            <tr>
                <th></th>
                <th>User</th>
                <th>Email</th>
                <th>Role</th>
                <th>Plan</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
</div>
@endsection 
@section('scripts')
    @parent
    $(document).ready(function() {
        $('#example').DataTable();
    } );
<script>
</script>
@endsection