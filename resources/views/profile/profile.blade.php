@extends('app')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Profile of {{ $profiledata->name }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <p>Username: {{ $profiledata->name }}</p>
                            <p>Level: {{ $profiledata->level }}</p>
                            <p>Experience: {{ $profiledata->exp }} / {{ $profiledata->max_exp }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm">
                            Money: {{ $profiledata->money }}
                            Yeast: {{ $profiledata->yeast }}
                            Sugar: {{ $profiledata->sugar }}
                            Coal: {{ $profiledata->coal }}
                            Mash: {{ $profiledata->mash }}
                            Alcohol: {{ $profiledata->alcohol }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection