@extends('layouts.app')


@section('content')


<div class="container">

    <div class="row">

<h1 class="w-100 text-center">Liste des utilisateurs</h1>









     <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">email</th>
            <th scope="col">rôles</th>
            
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
         

            @foreach ($users as $user)
            <tr>
            <th scope="row"></th>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{  implode(',' ,  $user->roles()->get()->pluck('name')->toArray() )  }}</td>
            <td> <a class="btn btn-primary" href="{{route('admin.users.edit' , $user->id)}}" role="button">Update</a>
               
              
              {{--  <a class="btn btn-danger" href="{{route('admin.users.destroy' , $user->id)}}" role="button">Delete</a>  --}}

              @can('delete-users')

              <form action="{{route('admin.users.destroy' , $user->id)}}" 
                method="POST"
                class="d-inline"
                >
                @csrf
                @method('DELETE')


                <button class="btn btn-danger" type="submit">Effacer</button>
               

              </form>
              @endcan
            </td>
            </tr>
            @endforeach
          
       

          
    
      
        </tbody>
      </table>

    </div>
</div>

@endsection