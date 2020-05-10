@extends('layouts.app')


@section('content')

<div class="container">


    <div class="row">



        <h1 class="w-100 text-center"> Modifier  Utilisatateur <strong>  {{$user->name}} </strong>    </h1>
    </div>





    <div class="row">


        <form class="w-50 mx-auto" method="POST" action="{{route('admin.users.update' , $user) }}">

            @csrf

            @method('PUT')
           

         


          
            <div class="form-group">

                <div class="row">


                    <form class="w-50 mx-auto" method="POST" action="{{route('admin.users.update' , $user) }}">
            
                        @csrf
            
                        @method('PUT')
                       
            
            
                            <label for="name">Name :</label>
            
                            <input type="text" name="name" placeholder="Your name"
                                
                                class="form-control  @error('name') is-invalid  @enderror"
                                value="{{ old('name') ?? $user->name  }}"
                            >
                     
            
            
                            <label for="email">Email address :</label>
            
                            <input type="email" name="email" placeholder="Votre email"
                                
                                class="form-control @error('email') is-invalid  @enderror" 
                                value="{{ old('email')  ??  $user->email}}"
                            >
                     
                        <div class="form-group mt-5">


                @foreach ($roles as $role)

                <div class="form-check">
        <input 
        class="form-check-input" 
        type="checkbox"
         name="roles[]"
          value="{{$role->id}}" 
          id="{{$role->id}} "
{{--  
          @foreach ($user->roles as $userRole)
                    
          @if ($userRole->id === $role->id)
              checked
          @endif
              
          @endforeach  --}}
        
           
        @if ($user->roles->pluck('id')->contains($role->id))

        checked
            
        @endif

        >
        <label class="form-check-label" for="{{$role->id}}">
        {{$role->name}}
        </label>
                    
            </div>
            @endforeach


                <div class="form-group text-center">

            <button type="submit" class=" mt-5 btn btn-primary">Mettre à jour</button>

                </div>
        
        
            </form>


    </div>

    
</div>


@endsection