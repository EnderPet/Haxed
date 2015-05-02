@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Banken</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Insättning</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">kr</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn"><button class="btn btn-default">Sätt in</button></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Uttag</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">kr</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn"><button class="btn btn-default">Ta ut</button></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-md-6">
                                    <form>
                                        <label class="control-label">Utlåning</label>
                                        <div class="form-group">
                                            <label class="control-label">Låna ut till</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                                <select class="form-control">
                                                    <optgroup label="Låna ut till">Låna ut till</optgroup>
                                                    <option>Banken (Säkrast - 3% ränta.)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">kr</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-default">Låna ut</button></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form>
                                <label class="control-label">Kontoöversikt</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                        <input type="text" class="form-control" disabled="disabled" value="{{ number_format('527000', 0, ',', '.') }} kr">
                                        <span class="input-group-addon">Saldo</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                                        <input type="text" class="form-control" disabled="disabled" value="56 min">
                                        <span class="input-group-addon fixed-width">Tid till nästa insättning</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                                        <input type="text" class="form-control" disabled="disabled" value="32 min">
                                        <span class="input-group-addon fixed-width">Tid till nästa utlåning</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form>
                                <label class="control-label">Överföring</label>
                                <div class="form-group">
                                    <label class="control-label">Skicka pengar till</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">kr</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn"><button class="btn btn-default">Skicka</button></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection