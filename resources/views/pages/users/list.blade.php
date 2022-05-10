@extends('layouts.app1')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Start date</th>



      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">1</th>
       
        <th>{{$user->name}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->password}}</th> 
        <th>{{$user->created_at     }}</th> 
        
            
      </tr>
      @endforeach
</tbody>
</table>
@endsection