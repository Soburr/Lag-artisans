<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <title>Unilag Artisans | Login</title>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <h2>Lag Artisans</h2>

            @if ($errors->any())
                 <div class="alert alert-danger" style="color: red; font-size: 20px;">
                     @foreach ($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                     @endforeach
                 </div><br>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <input type="text" name="email" placeholder="Email" required autofocus>
                </div>
                <div class="field space">
                    <input type="password" name="password" placeholder="Password" required autofocus>
                </div><br>
                <div class="field">
                    <input type="submit" value="LOG IN">
                </div>
            </form><br>

            <div class="signup">
                <input type="checkbox" name="remember" id="remember_me"
                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50">
                <span>{{ __('Remember me')}}</span><br><br>
                Don't have an account ?
                <a href="register">Sign Up</a><br><br>

                {{-- Reset Password --}}
                @if (Route::has('password.request'))
                   <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request')}}">Forgot Your Password ?</a>
                @endif
            </div>

            {{-- <div class="signup">
                Don't have an account ?
                <a href="register">Sign Up</a>
            </div> --}}
        </div>
    </div>
</body>

</html>
