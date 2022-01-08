@extends('layouts.app')
@section('content')

<div class="container">
    <table class="display responsive nowrap table" width="100%" id="table">
        <thead>
          <tr>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Created date</th>
            <th scope="col">Updated date</th>
          </tr>
        </thead>
        {{-- <tbody> --}}
          
            {{-- @foreach ($users as $user)
            <tr>
                <th>{{ $user->firstname }} </th>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            @endforeach --}}
        {{-- </tbody> --}}
        
      </table>
</div>
   
@endsection
<script>
    document.addEventListener('DOMContentLoad', () => {
        
        $('#table').Datatable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('ajax')}}",
            "columns": [
                { "data": "firstname", name:  "firstname"},
                { "data": "lastname", name:  "lastname"},
                { "data": "email", name:  "email"},
                { "data": "created_at", name:  "created_at"},
                { "data": "updated_at", name:  "updated_at"},
            ]
        })

    })
    
</script>