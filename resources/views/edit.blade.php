@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="/create/save">
        @csrf
        <h1>Person Information</h1>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Name: </h2>
            <div class="col-md-6">
                <input id="name" type="name" class="form-control" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

            </div>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Last Name: </h2>
            <div class="col-md-6">
                <input id="last_name" type="last_name" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" required autocomplete="last_name" autofocus>

            </div>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Sex: </h2>
            <div class="col-md-6">
                <input id="sex" type="sex" class="form-control" name="sex" value="{{ Auth::user()->sex }}" required autocomplete="sex" autofocus>

            </div>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Age: </h2>
            <div class="col-md-6">
                <input id="age" type="age" class="form-control" name="age" value="{{ Auth::user()->age }}" required autocomplete="age" autofocus>

            </div>
        </div>

        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >City: </h2>
            <div class="col-md-6">
                <input id="cities" type="cities" class="form-control" name="cities" value="{{ $info->cities }}" required autocomplete="cities" autofocus>

            </div>
        </div>
        <div class="form-group row ">
            <h2 class="col-md-4 text-md-righ" >Country: </h2>
            <div class="col-md-6">
                <input id="countries" type="countries" class="form-control" name="countries" value="{{ $info->countries }}" required autocomplete="countries" autofocus>

            </div>
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
        
        

        
        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection