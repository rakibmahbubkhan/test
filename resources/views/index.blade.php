@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Started</th>
      <th scope="col">Finished</th>
      <th scope="col">Working Hours</th>

    </tr>
  </thead>
  <tbody>
 @foreach($users as $user)

    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->first_in }}</td>
      <td>{{ $user->last_out }}</td>
      <td>{{ $user->last_out->diffForHumans() }}</td>

    </tr>
    @endforeach

    
    
  </tbody>
</table>
<a href="{{url('/download-pdf')}}"><input class="btn btn-warning" type="submit" value="Export report"></a>

        </div>
    </div>
</div>
@endsection