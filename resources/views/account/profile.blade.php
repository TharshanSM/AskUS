@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Manage Skills
                </div>
                <div class="card-body">
                    <a href="{{URL('/user/skills')}}" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Manage Profile
                </div>
                <div class="card-body">
                    <a href="{{URL('/user/update_profile')}}" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
