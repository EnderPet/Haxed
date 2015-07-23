@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $news->title }} <span class="pull-right"><p>{{ ($news->updated_at > $news->created_at) ? 'Updated ' : 'Created ' }}by: {{ $news->users->name }} @ {{ ($news->updated_at > $news->created_at) ? $news->updated_at : $news->created_at }}</p></span></div>
                <div class="panel-body">{!! $news->content !!}</div>
            </div>
        </div>
    </div>

@endsection