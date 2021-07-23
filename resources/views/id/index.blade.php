<?php>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel QR Code Example</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
    <h3>{{$data->name}}</h3>

    <br>
    <img style="width:100px;margin:auto" src="{{ URL::asset('images/') }}/{{$data->images}}">

    <br>
    <br>
    {!! QrCode::size(300)->generate("id.maesalab.net/id/$data->id"); !!}
    <br>

</div>

</body>
</html>
<?>