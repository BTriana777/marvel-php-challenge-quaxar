@extends('layouts.app')

@section('content')
<div class="container">

    <form method="GET" action="/create">
        @csrf
        <h1>Person Information</h1>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Name: </h2>
            <h3 class="col-md-4 text-md-righ" >{{ Auth::user()->name  }} </h3>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Last Name: </h2>
            <h3 class="col-md-4 text-md-righ" >{{ Auth::user()->last_name  }} </h3>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Sex: </h2>
            <h3 class="col-md-4 text-md-righ" >{{ Auth::user()->sex  }} </h3>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Age: </h2>
            <h3 class="col-md-4 text-md-righ" >{{ Auth::user()->age  }} </h3>
        </div>

        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >City: </h2>
            <h3 class="col-md-4 text-md-righ" >{{ $info->cities  }} </h3>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Country: </h2>
            <h3 class="col-md-4 text-md-righ" >{{ $info->countries  }} </h3>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >favorite marvel character: </h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src={{ $hero->thumbnail->path . "." . $hero->thumbnail->extension}} class="card-img-top"/>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hero->name }}</h5>
                            <p class="card-text">{{ $hero->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >favorite Comic character: </h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src={{ $comics->thumbnail->path . "." . $comics->thumbnail->extension}} class="card-img-top"/>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comics->title }}</h5>
                            <p class="card-text">{{ $comics->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        <button class="btn btn-primary">Edit User</button>
    </form>
    <form method="GET" action="/delete">
        <button class="btn btn-danger mt-2" >Delete User</button>
    </form>
</div>
@endsection
