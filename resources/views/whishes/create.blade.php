@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a whish</div>

                <div class="card-body"> 

                    @include('partials.errors')                    

                    <form method="POST" action="/whishes">
                        @csrf
                        
                        @include('whishes.form')

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    