<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=width-device, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/min.js"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    <title>Unilag Artisans</title>
</head>

<body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <h5 class="font-weight-light mb-4 font-bold"
                    style="color: blue; font-family: monaco; font-size: 32px; text-align:center;"> CONNECT WITH AN
                    ARTISAN TODAY.! </h5>

                <div class="bg-white p-5 rounded shadow">
                    <form method="GET" action="{{ route('search') }}">
                        <div class="row">
                            <div class="form-group col-md-9">
                                <input id="" type="text"
                                    placeholder="Search For An Artisan..." class="form-control form-control-underlined" name="search">
                            </div>
                            <div class="form-group col-md-3">
                                <button type="submit" class="custom-btn btn-1"> Search </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="app.js"></script>
</body>

</html>
