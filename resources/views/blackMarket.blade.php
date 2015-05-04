@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Svarta Marknaden</div>
                    <div class="panel-body">

                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#burners" aria-controls="burners" role="tab" data-toggle="tab">Brännare</a></li>
                                <li role="presentation"><a href="#weapon" aria-controls="weapon" role="tab" data-toggle="tab">Vapen</a></li>
                                <li role="presentation"><a href="#armor" aria-controls="armor" role="tab" data-toggle="tab">Skydd</a></li>
                            </ul>
                            <!-- tabs -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="burners">
                                    <h3>Brännare <i class="fa fa-fire"></i></h3>
                                    <p class="text-warning">
                                        För att kunna bränna sprit så behövs det såklart en brännare.<br />
                                        Här hittar du allt ifrån den minsta nybörjar brännaren till de mest extrema prototyperna på marknaden.<br />
                                        Om du vill öka dina inkomster så får du jobba dig upp till en dyrare brännare.<br />
                                        Tänk på att de billigare brännarna går sönder snabbare än de dyrare.
                                    </p>
                                    @if(Session::has('burnerShopFailed'))
                                        <p class="alert alert-danger">
                                            {{ Session::get('burnerShopFailed') }}
                                        </p>
                                    @elseif(Session::has('burnerShopSuccess'))
                                        <p class="alert alert-success">
                                            {{ Session::get('burnerShopSuccess') }}
                                        </p>
                                    @endif
                                    <hr />
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Brännare</th>
                                            <th>Max Kapacitet</th>
                                            <th>Pris</th>
                                            <th>Nivåkrav</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($burners as $burner)
                                            <tr>
                                                <td>{{ $burner->name }}</td>
                                                <td>{{ $burner->max_capacity }} L</td>
                                                <td>{{ $burner->price }} kr</td>
                                                <td>{{ $burner->level_requirement }}</td>
                                                <td class="text-center"><a href="/blackMarket/burner/{{ $burner->id }}">Köp</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <hr />
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Premium Brännare</th>
                                            <th>Max Kapacitet</th>
                                            <th>Pris</th>
                                            <th>Nivåkrav</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($premiumBurners as $burner)
                                            <tr>
                                                <td>{{ $burner->name }}</td>
                                                <td>{{ $burner->max_capacity }} L</td>
                                                <td>{{ $burner->price }} kr</td>
                                                <td>{{ $burner->level_requirement }}</td>
                                                <td class="text-center"><a {{ ($user->premium_1 != 1) ? 'class=popup data-toggle=popover href=#' : 'href=/blackMarket/burner/' . $burner->id }}>Köp</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="weapon">
                                    <h3>Vapen <i class="fa fa-fire"></i></h3>
                                    <p class="text-warning">
                                        För att kunna bränna sprit så behövs det såklart en brännare.<br />
                                        Här hittar du allt ifrån den minsta nybörjar brännaren till de mest extrema prototyperna på marknaden.<br />
                                        Om du vill öka dina inkomster så får du jobba dig upp till en dyrare brännare.<br />
                                        Tänk på att de billigare brännarna går sönder snabbare än de dyrare.
                                    </p>
                                    @if(Session::has('weaponShopFailed'))
                                        <p class="alert alert-danger">
                                            {{ Session::get('weaponShopFailed') }}
                                        </p>
                                    @elseif(Session::has('weaponShopSuccess'))
                                        <p class="alert alert-success">
                                            {{ Session::get('weaponShopSuccess') }}
                                        </p>
                                    @endif
                                    <hr />
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Vapen</th>
                                            <th>Skada</th>
                                            <th>Pris</th>
                                            <th>Nivåkrav</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($burners as $burner)
                                            <tr>
                                                <td>{{ $burner->name }}</td>
                                                <td>{{ $burner->max_capacity }} L</td>
                                                <td>{{ $burner->price }} kr</td>
                                                <td>{{ $burner->level_requirement }}</td>
                                                <td class="text-center"><a href="/blackMarket/burner/{{ $burner->id }}">Köp</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <hr />
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Premium Vapen</th>
                                            <th>Skada</th>
                                            <th>Pris</th>
                                            <th>Nivåkrav</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($premiumBurners as $burner)
                                            <tr>
                                                <td>{{ $burner->name }}</td>
                                                <td>{{ $burner->max_capacity }} L</td>
                                                <td>{{ $burner->price }} kr</td>
                                                <td>{{ $burner->level_requirement }}</td>
                                                <td class="text-center"><a {{ ($user->premium_1 != 1) ? 'class=popup data-toggle=popover href=#' : 'href=/blackMarket/burner/' . $burner->id }}>Köp</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="armor">
                                    <h3>Skydd <i class="fa fa-fire"></i></h3>
                                    <p class="text-warning">
                                        För att kunna bränna sprit så behövs det såklart en brännare.<br />
                                        Här hittar du allt ifrån den minsta nybörjar brännaren till de mest extrema prototyperna på marknaden.<br />
                                        Om du vill öka dina inkomster så får du jobba dig upp till en dyrare brännare.<br />
                                        Tänk på att de billigare brännarna går sönder snabbare än de dyrare.
                                    </p>
                                    @if(Session::has('armorShopFailed'))
                                        <p class="alert alert-danger">
                                            {{ Session::get('armorShopFailed') }}
                                        </p>
                                    @elseif(Session::has('armorShopSuccess'))
                                        <p class="alert alert-success">
                                            {{ Session::get('armorShopSuccess') }}
                                        </p>
                                    @endif
                                    <hr />
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Skydd</th>
                                            <th>Hållbarhet</th>
                                            <th>Pris</th>
                                            <th>Nivåkrav</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($burners as $burner)
                                            <tr>
                                                <td>{{ $burner->name }}</td>
                                                <td>{{ $burner->max_capacity }} L</td>
                                                <td>{{ $burner->price }} kr</td>
                                                <td>{{ $burner->level_requirement }}</td>
                                                <td class="text-center"><a href="/blackMarket/burner/{{ $burner->id }}">Köp</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <hr />
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Premium Skydd</th>
                                            <th>Hållbarhet</th>
                                            <th>Pris</th>
                                            <th>Nivåkrav</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($premiumBurners as $burner)
                                            <tr>
                                                <td>{{ $burner->name }}</td>
                                                <td>{{ $burner->max_capacity }} L</td>
                                                <td>{{ $burner->price }} kr</td>
                                                <td>{{ $burner->level_requirement }}</td>
                                                <td class="text-center"><a {{ ($user->premium_1 != 1) ? 'class=popup data-toggle=popover href=#' : 'href=/blackMarket/burner/' . $burner->id }}>Köp</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.popup').popover({
                'html': true,
                'placement': 'left',
                'title': 'Skaffa Premium',
                'content': 'För att kunna köpa denna brännare krävs premium.<br />Skicka ett SMS med texten<hr />' +
                '<span class="smstext">??? PREMIUM {{ strtoupper($user->name) }}</span> ' +
                'till <span class="smstext">72550</span><hr /> SMS:et kostar 30kr + ev. sms-taxa och ger dig premium i 7 dagar'
            })
        });
    </script>
@endsection