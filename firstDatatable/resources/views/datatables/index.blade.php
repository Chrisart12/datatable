@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered" id="users-table">
        <thead>
            <thead>
                <tr>
                  <th scope="col">Firstname</th>
                  <th scope="col">Lastname</th>
                  <th scope="col">Email</th>
                  <th scope="col">Created date</th>
                  <th scope="col">Updated date</th>
                </tr>
              </thead>
        </thead>
    </table>
</div>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { "data": "firstname", name:  "firstname"},
            { "data": "lastname", name:  "lastname"},
            { "data": "email", name:  "email"},
            { "data": "created_at", name:  "created_at"},
            { "data": "updated_at", name:  "updated_at"},
        ]
    });
});
</script>
@endpush