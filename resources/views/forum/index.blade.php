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
@endsection