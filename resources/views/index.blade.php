@extends('app')
@section('content')
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
@endsection