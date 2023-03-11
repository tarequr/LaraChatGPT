<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="p-3">
            <div class="p-3 rounded text-light" style="background: blueviolet">
                <h4>Laravel ChatGpt</h4>
                <p>Message</p>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-md-2">Laravel Question:</div>
            <div class="col-md-7">
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-3">
                <button class="btn btn-secondary">Reset Conversation</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
