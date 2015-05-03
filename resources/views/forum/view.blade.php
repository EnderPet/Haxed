@extends('app')
@section('stylesheets')
    <link href="/css/forum.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Forum
                    <button id="join-discussion" class="pull-right btn btn-primary btn-xs start-discussion">Delta i diskussion</button>
                </div>
                <div class="panel-body">
                    <div class="forum-wrap">
                        <article class="well well-sm">
                            <div class="discussion-header">
                                <span class="author"><a href="#">{{ ucfirst($thread->author()->first()->name) }}</a></span>
                                <span class="date pull-right">Skrevs för 1 dag sedan</span>
                            </div>
                            <div class="discussion-body">
                                {{ $thread->content }}
                            </div>
                            <div class="forum-meta">
                            </div>
                        </article>

                        @foreach($replies as $reply)
                        <article class="well well-sm">
                            <div class="discussion-header">
                                <span class="author"><a href="#">{{ ucfirst($reply->author()->first()->name) }}</a></span>
                                <span class="date pull-right">Skrevs för 1 dag sedan</span>
                            </div>
                            <div class="discussion-body">
                                {{ $reply->content }}
                            </div>
                            <div class="forum-meta">
                            </div>
                        </article>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {!! $replies->render() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 reply">
                        <form method="POST" action="/forum/reply">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="thread_id" value="{{ $thread->id }}">
                            <div class="form-group">
                                <textarea name="content" rows="10" class="form-control no-resize"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary pull-right" value="Skicka meddelande">
                        </form>
                        </div>
                    </div>
                    @if($errors->forum_reply->first())
                    <div class="row">
                        <div class="col-md-12">
                            <hr />
                            <div class="alert alert-dismissable alert-danger">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>Hoppsan! Något blev fel.</strong>
                                @foreach ($errors->forum_reply->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Starta en diskussion</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('/forum/start-discussion') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="channel">Välj en kategori</label>
                            <select class="form-control" name="channel">
                                @foreach($channels as $channel)
                                    <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Ge din diskussion en rubrik</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Och börja diskutera!</label>
                            <textarea class="form-control no-resize" name="content" rows="10"></textarea>
                        </div>
                        @if($errors->forum_thread->first())
                            <div class="alert alert-dismissable alert-danger">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>Hoppsan! Något blev fel.</strong>
                                @foreach ($errors->forum_thread->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Skicka</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $("#join-discussion").click(function() {
            $('html, body').animate({
                scrollTop: $(".reply").offset().top
            }, 2000);
        });
    </script>
    @if($errors->forum_thread->first())
        <script type="text/javascript">
            $(document).ready(function () {
                $('.modal').modal('show');
            });
        </script>
    @endif
@endsection