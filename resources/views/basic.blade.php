@extends('layouts.app')

@section('content')
<example></example>
<div class="container">
    <table id="users-table" class="table table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
</table>
</div>
@endsection

@push('scripts')
 <!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- DataTables -->
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/home/ajax-test'
        });
    });
</script>
@endpush