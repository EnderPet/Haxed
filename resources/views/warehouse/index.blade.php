@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Lagerlokalen</div>
            <div class="panel-body">
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
                    @foreach($warehouses as $warehouse)
                        <tr>
                            <td>{{ $warehouse->name }}</td>
                            <td>{{ $warehouse->max_capacity }} L</td>
                            <td>{{ $warehouse->price }} kr</td>
                            <td>{{ $warehouse->level_requirement }}</td>
                            <td class="text-center">{!! ($user->burner_id == $warehouse->id) ? '' : '<a href="/blackMarket/burner/{{ $warehouse->id }}">Köp</a>' !!} </td>
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
                    @foreach($premiumWarehouses as $warehouse)
                        <tr>
                            <td>{{ $warehouse->name }}</td>
                            <td>{{ $warehouse->max_capacity }} L</td>
                            <td>{{ $warehouse->price }} kr</td>
                            <td>{{ $warehouse->level_requirement }}</td>
                            <td class="text-center"><a {{ ($user->premium_1 != 1) ? 'class=popup data-toggle=popover href=#' : 'href=/blackMarket/burner/' . $warehouse->id }}>Köp</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <!-- Javascript Initiation Here -->
@endsection