<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Simple QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style type="text/css" media="print">
        .no-print { display: none; }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="no-print">
            <h1>Generate simple qr code</h1>
            <form action="{{ url('') }}">
                <label for="url">Enter your url</label>
                <input type="url" name="url" id="url">
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
        
        @if($url)
            <div class="card" style="align-content: center">
                <div class="card-header">
                    <h2>Simple QR Code</h2>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->generate($url) !!}
                </div>
            </div>

            <h1>Qr Code for <h3>{{$url}}</h3></h1>
            <button class="no-print btn btn-primary " onclick="window.print()">Print</button>

        @endif

        {{-- <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!}
            </div>
        </div> --}}

    </div>
</body>
</html>