@extends('app')
@section('content')

    @if(count($news) < 1)
        no news
    @else
        @foreach($news as $n)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><a href="/news/read/{{ $n->id }}">{{ $n->title }}</a> <span class="pull-right"><p>{{ ($n->updated_at > $n->created_at) ? 'Updated ' : 'Created ' }}by: {{ $n->users->name }} @ {{ ($n->updated_at > $n->created_at) ? $n->updated_at : $n->created_at }}</p></span></div>
                        <div class="panel-body">{{ substr(strip_tags($n->content), 0, 400) }} <a href="/news/read/{{ $n->id }}">[Read More]</a></div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    {!! $news->render() !!}

@endsection