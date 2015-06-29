@extends('app')
@section('content')
    @if(Auth::check())
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">test</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">test</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">test</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">test</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">test</div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Haxed HB 2.0</div>
                <div class="panel-body">
                    {{ Lang::get('general.notloggedindescription') }}
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <img src="http://placehold.it/256x146" class="img-responsive img-thumbnail" />
                        </div>
                        <div class="col-md-4">
                            <img src="http://placehold.it/256x146" class="img-responsive img-thumbnail" />
                        </div>
                        <div class="col-md-4">
                            <img src="http://placehold.it/256x146" class="img-responsive img-thumbnail" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection