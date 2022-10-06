<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="main-wrapper" id="app">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="container">
                    @yield("content")
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>