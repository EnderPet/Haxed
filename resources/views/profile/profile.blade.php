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
                            <p><i class="fa fa-money fa-fw"></i> Money: {{ $profiledata->money }}</p>
                            <p><i class="fa fa-leaf fa-fw"></i>Yeast: {{ $profiledata->yeast }}</p>
                            <p><i class="fa fa-cubes fa-fw"></i>Sugar: {{ $profiledata->sugar }}</p>
                            <p><i class="fa fa-cloud fa-fw"></i>Coal: {{ $profiledata->coal }}</p>
                            <p>? Mash: {{ $profiledata->mash }}</p>
                            <p><i class="fa fa-flask fa-fw"></i>Alcohol: {{ $profiledata->alcohol }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection