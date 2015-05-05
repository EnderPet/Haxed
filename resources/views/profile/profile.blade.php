@extends('app')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Profile of {{ $profiledata->name }} {{ ($profiledata->id == Auth::id()) ? 'edit' : '' }}</div>
            <div class="panel-body">
                Profile stuff goes here..
            </div>
        </div>
    </div>

@endsection