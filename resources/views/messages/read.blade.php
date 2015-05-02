@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="" style="overflow:hidden;">
                <div class="" style="float:left;">Title: Mitt Meddelande<br/>From: MyUser</div>
                <div class="" style="float:right;">2015-04-02<br/>16:27:00</div>
            </div>
            <div class="">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea rows="4" cols="50" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Reply" class="form-control">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 well">
            <div class="">Hejsan<br/>hejsan<br/>heeeeeeeeeej<br/></div>
        </div>
    </div>
@endsection