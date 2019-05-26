@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Whish</div>

                <div class="card-body">
                    <form method="POST" action="/whishes/{{ $whish->id }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        
                        @include('whishes.form')

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    