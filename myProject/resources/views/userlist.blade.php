@extends('layout')

@section('content')
<h1>Registered Users</h1>
<table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                
               
            </tr>
        </thead>
        <tbody>
        @foreach($data as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->name}}</td>
                <td>{{$i->email}}</td>
                <td>{{$i->password}}</td>
              
                
            </tr>
        @endforeach
            </tbody>
    </table>
    <div>{{$data->links()}}</div>
@endsection


