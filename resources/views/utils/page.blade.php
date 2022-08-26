<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NostalgiaMess @hasSection('title')
            - @yield('title')
        @endif
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        html,
        body {
            background-color: #202020;
            color: #fafafa;
            margin: 0;
            width: 100%;
            height: 100%;
        }

        .card {
            background-color: #3a3a3a;
        }

        .alert ul {
            margin-bottom: 0 !important;
        }

        .nm-nav {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .nm-nav>a.active {
            color: white;
        }

        .nm-nav>a.active::after {
            content: '';

            width: 100%;
            position: absolute;
            left: 0;
            bottom: -10px;

            border-width: 0 0 1px;
            border-style: solid;
        }

        .nm-nav>a {
            color: #aaaaaa;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="h-100 position-relative d-flex justify-content-center align-items-center">
        @include('utils.navigation')
        <div class="card nm-content-card">
            <div class="card-body">
                @hasSection('title')
                    <h3 class="card-title text-center mb-3">@yield('title')</h3>
                @endif
                @include('utils.errors')
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
