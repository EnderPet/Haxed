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
                    <form class="pull-right" style="width: 200px;">
                        <div class="input-group pull-right">
                            <span class="input-group-addon input-grp-xsm"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control input-xsm" placeholder="Sök i forum">
                        </div>
                    </form>
                </div>
                <div class="panel-body">
                    <div class="forum-nav">
                        <ul>
                            <li><a href="#" class="active">Alla</a></li>
                            <li><a href="#">Allmänt</a></li>
                            <li><a href="#">Gängrelaterat</a></li>
                            <li><a href="#">Förslag</a></li>
                            <li><a href="#">Mina Diskussioner</a></li>
                        </ul>
                    </div>
                    <div class="forum-wrap">
                        @foreach($threads as $thread)
                        <article>
                            <div class="forum-body">
                                <a href="#"><h5>{{ $thread->title }}</h5></a>
                                <a href="#" class="btn btn-primary btn-forum disabled">{{ $thread->channel()->name }}</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">{{ $thread->updated_by }}</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">{{ $thread->replies }} st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        @endforeach

                        <article>
                            <div class="forum-body">
                                <a href="#"><h5>Här är din första tråd i detta forum</h5></a>
                                <a href="#" class="btn btn-primary btn-forum disabled">Allmänt</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-success btn-forum disabled">Mina Diskussioner</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-warning btn-forum disabled">Gängrelaterat</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-danger btn-forum disabled">Förslag</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-primary btn-forum disabled">Allmänt</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-success btn-forum disabled">Mina Diskussioner</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-warning btn-forum disabled">Gängrelaterat</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-danger btn-forum disabled">Förslag</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-warning btn-forum disabled">Gängrelaterat</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-danger btn-forum disabled">Förslag</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-primary btn-forum disabled">Allmänt</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-success btn-forum disabled">Mina Diskussioner</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-warning btn-forum disabled">Gängrelaterat</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-danger btn-forum disabled">Förslag</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-primary btn-forum disabled">Allmänt</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-success btn-forum disabled">Mina Diskussioner</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-warning btn-forum disabled">Gängrelaterat</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-danger btn-forum disabled">Förslag</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-warning btn-forum disabled">Gängrelaterat</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                        <article>
                            <div class="forum-body">
                                <h5>Här är din första tråd i detta forum</h5>
                                <a href="#" class="btn btn-danger btn-forum disabled">Förslag</a> <span class="text-muted">Senaste aktivitet var för 3 minuter sedan av <a href="#">Asdfowkw</a></span>
                            </div>
                            <div class="forum-meta">
                                <span class="replies">
                                    <a href="#" class="clearfix">6 st</a><span class="text-muted">Svar</span>
                                </span>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-12 text-center">
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
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
                                <option>Allmänt</option>
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