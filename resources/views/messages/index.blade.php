@extends('app')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Messages <span class="pull-right"><a href="/messages/new">New Message</a></span></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Mitt Meddelande <span class="pull-right">From MyUser</span></a>
                            <a href="#" class="list-group-item">Mitt Meddelande 2 <span class="pull-right">From MyUser</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection