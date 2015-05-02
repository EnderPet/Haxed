@extends('app')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Messages</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Mitt Meddelande</a>
                            <a href="#" class="list-group-item">Mitt Meddelande 2</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mitt Meddelande</div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    Här är mitt meddelande.
                                </div>
                                <div class="col-md-12">
                                    Från <användare> klockan 18:18 den 20/4/2015
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection