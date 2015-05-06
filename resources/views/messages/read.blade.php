@extends('app')
@section('content')
    @if(Session::has('Errors'))
        <div class="alert alert-danger">
            <h4>Error!</h4>
            {{ Session::get('Errors') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="" style="overflow:hidden;">
                <div class="" style="float:left;">Title: {{ $mess->title }}<br/>From: {{ $mess->fruser }}</div>
                <div class="" style="float:right;">{{ $mess->date['date'] }}<br/>{{ $mess->date['time'] }}</div>
            </div>
            <div class="">
                <form role="form" method="POST" action="/messages/reply">
                    <div class="form-group">
                        <input type="hidden" name="fuid" value="{{ $mess->tuid }}">
                        <input type="hidden" name="tuid" value="{{ $mess->fuid }}">
                        <input type="hidden" name="title" value="{{ $mess->title }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="form-group">
                        <textarea rows="4" cols="50" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Reply" class="form-control">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 well">
            <div class="">{{ nl2br($mess->message) }}</div>
        </div>
    </div>
@endsection