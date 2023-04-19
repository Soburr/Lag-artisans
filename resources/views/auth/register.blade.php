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
    <title>Unilag Artisans | Register</title>
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

            <form method="POST" action="{{ route('register') }}">
                @csrf

              {{-- NAME FIELD     --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="name" placeholder="Name" required autofocus>
                </div><br>

               {{-- PHONE NUMBER --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="number" placeholder="Phone Number" required autofocus>
                </div><br>

                {{-- HALL OF RESIDENCE --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="hallOfResidence" placeholder="Hall Of Residence" required autofocus>
                </div><br>

                {{-- ROOM NUMBER --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="roomNumber" placeholder="Room Number" required autofocus>
                </div><br>

                {{-- WHAT DO YOU DO? --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="artisan" placeholder="What is Your Specialty" required autofocus>
                </div><br>

                {{-- EMAIL FIELD --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" placeholder="Email" required autofocus>
                </div><br>

                {{-- PASSWORD FIELD --}}
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" placeholder="Password" required autofocus>
                    <span class="show">SHOW</span>
                </div><br>

                {{-- CONFIRM PASSWORD --}}
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required autofocus>
                    <span class="show">SHOW</span>
                </div><br>

                {{-- LOGIN FIELD --}}
                <div class="field">
                    <input type="submit" value="SIGN UP">
                </div>
            </form><br>

            <div class="signup">
                Already Have An Account ?
                <a href="login">Login</a>
            </div>

        </div>
    </div>
</body>

</html>
