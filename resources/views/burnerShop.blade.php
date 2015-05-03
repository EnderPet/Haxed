@extends('app')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Lagerlokalen</div>
                    <div class="panel-body">
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
                        <table class="table table-bordered">
                            <thead>
                            <th>Brännare</th>
                            <th>Max Kapacitet</th>
                            <th>Pris</th>
                            <th>Nivåkrav</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($burners as $burner)
                            <tr>
                                <td>{{ $burner->name }}</td>
                                <td>{{ $burner->max_capacity }} L</td>
                                <td>{{ $burner->price }} kr</td>
                                <td>{{ $burner->level_requirement }}</td>
                                <td class="text-center"><a href="/burnerShop/{{ $burner->id }}">Köp</a> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr />
                        <table class="table table-bordered">
                            <thead>
                            <th>Premium Brännare</th>
                            <th>Max Kapacitet</th>
                            <th>Pris</th>
                            <th>Nivåkrav</th>
                            <th></th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Powerstormer v5.341</td>
                                <td>565.000 L</td>
                                <td>4 950 000 000 kr</td>
                                <td>850</td>
                                <td class="text-center"><a href="#" class="popup">Köp</a> </td>
                            </tr>
                            </tbody>
                        </table>
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