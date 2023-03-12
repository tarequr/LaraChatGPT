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
        <div class="container">
            @foreach ($messages as $message)
                <div class="p-3">
                    <div class="p-3 rounded text-light" @if ($message['role'] == 'assistant') style="background: rgb(43, 226, 171)" @else style="background: blueviolet" @endif>
                        @if ($message['role'] == 'assistant')
                            <h4>ChatGpt</h4>
                        @else
                            <h4>You</h4>
                        @endif

                        <p>{!! \Illuminate\Mail\Markdown::parse($message['content']) !!}</p>
                    </div>
                </div>
            @endforeach

            <form action="{{ route('submit.message') }}" method="POST">
                @csrf

                <div class="row p-3">
                    <div class="col-md-1">Question:</div>
                    <div class="col-md-10">
                        <input type="text" name="message" id="message" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
