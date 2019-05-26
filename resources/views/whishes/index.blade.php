@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Whishes
                    <a href="whishes/create">Create<a>
                </div>

                <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Description</th>
                                <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($whishes as $whish)
                                    <tr>
                                        <td>{{  $whish->description }}</td>
                                        <td><a href="/whishes/{{ $whish->id }}">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    