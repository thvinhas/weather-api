<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="antialiased">
    <header class="p-3 bg-dark text-white mb-4">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <div class="col-12 col-lg-12 mb-12 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search"
                    id="search">
            </div>

        </div>
    </header>

    <div class="row">
        <div class="container">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h4 class="m-0 font-weight-bold text-primary" id="forecast"></h4>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th>temperature:</th>
                                    <td id="temperature"></td>
                                </tr>
                                <tr>
                                    <th>feels like:</th>
                                    <td id="feelsLike"></td>
                                </tr>
                                <tr>
                                    <th>humidity:</th>
                                    <td id="humidity"></td>
                                </tr>
                                <tr>
                                    <th>max temperature:</th>
                                    <td id="maxTemperature"></td>
                                </tr>
                                <tr>
                                    <th>min temperature:</th>
                                    <td id="minTemperature"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/app.js"></script>
<script src="/js/script.js"></script>

</html>