@extends('app')

@section('stylesheets')
    <link media="all" type="text/css" rel="stylesheet" href="/css/jquery-ui.min.css">
@endsection

@section('content')
    @if(Session::has('Errors'))
        <div class="alert alert-danger">
            <h4>Error</h4>
            {{ Session::get('Errors') }}
        </div>
    @endif
    <form role="form" method="POST" action="/messages/send">
        <div class="form-group">
            <input type="text" name="touser" class="form-control" id="autocomplete" placeholder="Receiving Username*">

            <input type="hidden" name="fuid" value="{{ Auth::user()->id }}">
            <input type="hidden" name="tuid" id="m_tuid">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"
        </div>

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Message Subject*">
        </div>

        <div class="form-group">
            <textarea rows="4" cols="50" name="message" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Send Message" class="form-control">
        </div>
    </form>
@endsection

@section('javascript')
    <script src="/js/jquery-ui.min.js"></script>

    <script style="text/javascript">
        $(function() {
            $("#autocomplete").autocomplete({
                source: "searchusers",
                minLength: 2,
                select: function(event, ui) {
                    $("#m_tuid").val(ui.item.id);
                }
            });
        });
    </script>

@endsection
