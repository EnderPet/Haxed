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
                    <p>
                        Haxed HB 2.0 är en återupplivning av spelet Haxed HB som lades ner 2010.<br />
                        Haxed HB 2.0 är ett spel där du tar rollen som tillverkare och leverantör av hembränd sprit.<br />
                        Du startar spelet med ett antal kontakter för att komma igång och steg för steg kommer du närmare att bli härskare över den undre världen.<br />
                        Egna bränneriföretag, gäng, slagsmål, export och korrupta poliser är bara en smakbit av allt du missar på att inte vara inloggad!
                    </p>
                    <p>
                        Vi söker dig som inte viker sig för motgångar och konkurrenter som försöker att ta dina kunder,
                        attackera istället tillbaka med alla medel och visa vem det är som bestämmer! Ta klivet och gå
                        med i tidernas bästa onlinespel, registrera dig till vänster så är du snart igång!
                    </p>
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