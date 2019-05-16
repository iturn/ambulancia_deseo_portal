@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{  $user->name }}</td>
                                        <td>{{  $user->email }}</td>
                                        <td>{{  $user->status }}</td>
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
    