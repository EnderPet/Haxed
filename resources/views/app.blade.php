<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Haxed HB 2.0</title>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Haxed HB 2.0</a>
        </div>
        @if(Auth::check())
        <div class="container">
            <div class="col-md-12 status">
                <i class="status fa fa-money fa-fw"></i><span class="status text">{{ number_format($user->money, 0, ',', '.') }} kr</span>
                <i class="status fa fa-leaf fa-fw"></i><span class="status text">{{ number_format($user->yeast, 0, ',', '.') }} kg</span>
                <i class="status fa fa-cubes fa-fw"></i><span class="status text">{{ number_format($user->sugar, 0, ',', '.') }} kg</span>
                <i class="status fa fa-cloud fa-fw"></i><span class="status text">{{ number_format($user->coal, 0, ',', '.') }} kg</span>
                <i class="status fa fa-flask fa-fw"></i><span class="status text">{{ number_format($user->mash, 0, ',', '.') }} L</span>
            </div>
        </div>
        @endif
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3">

            @if(Auth::check())
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ ucfirst($user->name) }}
                    </div>
                    <div class="panel-body">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ floor(( $user->exp / $user->max_exp) * 100) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ floor(( $user->exp / $user->max_exp) * 100) }}%;">
                                <span class="progress-value">Experience {{ $user->exp }} / {{ $user->max_exp }}</span>
                            </div>
                        </div>
                        <hr />
                        <a href="/auth/logout" class="btn btn-default btn-block">Logga ut</a>
                    </div>
                </div>

                <div class="list-group">
                    <!-- <a href="/profile" class="list-group-item">Profil</a> -->
                    <!-- <a href="/gang" class="list-group-item">Gäng</a> -->
                    <a href="/" class="list-group-item">Nyheter</a>
                    <a href="/messages" class="list-group-item">Meddelanden</a>
                    <!-- <a href="/chat" class="list-group-item">Chatt</a> -->
                    <!-- <a href="/forum" class="list-group-item">Forum</a> -->
                    <!-- <a href="/internet" class="list-group-item">Internet</a> -->
                    <a href="/bank" class="list-group-item">Banken</a>
                    <!-- <a href="/casino" class="list-group-item">Kasino</a> -->
                    <!-- <a href="/weaponStore" class="list-group-item">Vapengallerian</a> -->
                    <!-- <a href="/armorStore" class="list-group-item">Skyddsbutiken</a> -->
                    <!-- <a href="/luckyShrine" class="list-group-item">Lyckobrunnen</a> -->
                    <!-- <a href="/market" class="list-group-item">Marknad</a> -->
                    <!-- <a href="/liveMessages" class="list-group-item">Live meddelanden</a> -->
                    <!-- <a href="/smsServices" class="list-group-item">SMS-tjänster</a> -->
                    <!-- <a href="/warehouse" class="list-group-item">Lagerlokalen</a> -->
                    <a href="/burnerShop" class="list-group-item">Boden för brännare</a>
                    <!-- <a href="/merchant" class="list-group-item">Grosshandlarn</a> -->
                    <!-- <a href="/mashBob" class="list-group-item">Mäskar-Lasse</a> -->
                    <!-- <a href="/laboratory" class="list-group-item">Brännarkammaren</a> -->
                    <!-- <a href="/alcoholMarket" class="list-group-item">Spritmarknaden</a> -->
                    <!-- <a href="/distilleries" class="list-group-item">Bränneriföretag</a> -->
                </div>
            @else
                <!-- LOGIN FORM -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Logga in
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="loginError" value="true">

                            <div class="form-group">
                                <label class="control-label">E-postadress</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Lösenord</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Kom ihåg
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Logga In</button>
                                <a class="btn btn-link" href="{{ url('/password/email') }}">Glömt Lösenord?</a>
                            </div>
                        </form>

                        @if (old('loginError'))
                            <div class="alert alert-danger">
                                <strong>Hoppsan!</strong> Någonting blev fel.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>

                <!-- REGISTER FORM -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Registrera dig
                    </div>
                    <div class="panel-body">

                        @if (old('registerError'))
                            <div class="alert alert-danger">
                                <strong>Hoppsan!</strong> Någonting blev fel.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="registerError" value="true">

                            <div class="form-group">
                                <label class="control-label">Användarnamn</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">E-postadress</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Lösenord</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Bekräfta Lösenord</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    Registrera
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-md-9">
            @yield('content')
        </div>

    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
@yield('javascript')
</body>
</html>