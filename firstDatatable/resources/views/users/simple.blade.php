@extends('layouts.app')
@section('content')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Created date</th>
            <th scope="col">Updated date</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($users as $user)
            <tr>
                <th>{{ $user->firstname }} </th>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            @endforeach
           
         
        </tbody>
        
      </table>
        <div>
            {{ $users->links() }}
        </div>
      
@endsection
