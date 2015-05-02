@extends('app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link media="all" type="text/css" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <form>
        <div class="form-group">
            <input type="text" name="touser" class="form-control" id="autocomplete" placeholder="Receiving Username*">

            <input type="hidden" name="m_fuid" value="{{ Auth::user()->id }}">
            <input type="hidden" name="m_tuid" id="m_tuid">
        </div>

        <div class="form-group">
            <input type="text" name="m_title" class="form-control" placeholder="Message Subject*">
        </div>

        <div class="form-group">
            <textarea rows="4" cols="50" name="m_message" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="button" value="Send Message" class="form-control">
        </div>
    </form>

    <script style="text/javascript">
        jQuery(document).ready(function() {
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
