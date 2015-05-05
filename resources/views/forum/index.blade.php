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
                    <button id="start-discussion" class="pull-right btn btn-primary btn-xs start-discussion">Starta Diskussion</button>
                    <form class="pull-right" method="POST" action="/forum" style="width: 200px;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group pull-right">
                            <span class="input-group-addon input-grp-xsm"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control input-xsm" name="search" placeholder="Sök i forum">
                        </div>
                    </form>
                </div>
                <div class="panel-body">
                    <div class="forum-nav">
                        <ul>
                            <li><a href="/forum" {{ Request::is('forum') ? 'class=active' : '' }}>Alla</a></li>
                            @foreach($channels as $channel)
                                <li><a href="/forum/channel/{{ strtolower($channel->name) }}" {{ Request::is('forum/channel/' . strtolower($channel->name)) ? 'class=active' : '' }}>{{ $channel->name }}</a></li>
                            @endforeach
                                <li><a href="/forum/mina-diskussioner" {{ Request::is('forum/mina-diskussioner') ? 'class=active' : '' }}>Mina Diskussioner</a></li>
                        </ul>
                    </div>
                    <div class="forum-wrap">
                        @foreach($threads as $thread)
                            <?php
                            $t1 = new DateTime($thread->updated_at);
                            $t2 = new DateTime('now');
                            $time = $t1->diff($t2);

                                if($time->days > 0){
                                    $timeprint = $thread->updated_at;
                                } elseif($time->days == 0 && $time->h > 0){
                                    if($time->h == 1){
                                        $timeprint = "för " . $time->h . " timme sedan";
                                    } else {
                                        $timeprint = "för " . $time->h . " timmar sedan";
                                    }
                                } else {
                                    $timeprint = "för " . $time->i . " minuter sedan";
                                }
                            ?>
                        <article>
                            <div class="forum-body">
                                <a href="/forum/view/{{ $thread->title . '-' . $thread->id }}"><h5>{{ $thread->title }}</h5></a>
                                    <a href="#" class="forum-channel btn btn-{{ ($thread->channel == 1 ? "primary" : ($thread->channel == 2 ? "warning" : ($thread->channel == 3 ? "danger" : "default"))) }} btn-forum disabled">{{ $thread->channel()->first()->name }}</a> <span class="text-muted fpt">Senaste aktivitet var {{ $timeprint }} av <a href="#">{{ $thread->user()->first()->name }}</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">{{ $thread->replies }} st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <div class="col-md-12 text-center">
                        {!! $threads->render() !!}
                    </div>
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
        $(document).ready(function () {
            $('#start-discussion').on('click', function () {
                $('.modal').modal('show');
            });
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