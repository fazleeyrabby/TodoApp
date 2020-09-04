

                            {{ session('status') }}
                        </div>
                        <div class="alert alert-success" role="alert">
                    @endif
                    @if (session('status'))
                    You are logged in!
                </div>
                <div class="card-body">
                <div class="card-header">Dashboard</div>
            </div>
            <div class="card">
        </div>
        <div class="col-md-8">
    </div>
    <div class="row justify-content-center">
</div>
<div class="container">
@endsection
@extends('layouts.app')
@section('content')