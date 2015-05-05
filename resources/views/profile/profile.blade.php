@extends('app')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Profile of {{ $profiledata->name }}</div>
            <div class="panel-body">
                <div class="well well-sm">
                    Username: {{ $profiledata->name }}
                    Level: {{ $profiledata->level }}
                    Experience: {{ $profiledata->exp }} / {{ $profiledata->max_exp }}
                </div>
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

@endsection