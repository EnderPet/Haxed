@extends('app')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Messages <span class="pull-right"><a href="/messages/new">New Message</a></span></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group">
                            @foreach($mess as $m)
                                <a href="/messages/read/{{ $m->id }}">{{ $m->title }} <span class="pull-right">From: {{ $m->fuid }}</span></a>
                            @endforeach
                            <a href="/messages/read/1" class="list-group-item">Mitt Meddelande <span class="pull-right">From: MyUser</span></a>
                            <a href="/messages/read/1" class="list-group-item">Mitt Meddelande 2 <span class="pull-right">From: MyUser</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection