@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Grosshandlarn</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="well well-sm">
                        <form role="form" method="POST" action="#">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="inputName">Jäst</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="yeast" value="{{ old('yeast') }}" />
                                    <span class="input-group-addon"><i class="fa fa-leaf"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Socker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="sugar" value="{{ old('sugar') }}" />
                                    <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Kol</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="coal" value="{{ old('coal') }}" />
                                    <span class="input-group-addon"><i class="fa fa-cloud"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Köp</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <!-- Javascript Initiation Here -->
@endsection