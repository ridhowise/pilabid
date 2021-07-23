<?php>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ URL::asset('adm/css/id.css') }}" rel="stylesheet">
    <title>Id Maesalab</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
<div class="card">
        <div class="card-img">
        <img src="{{ URL::asset('images/') }}/{{$data->images}}"></div>
        <div class="desc">
            <h6 class="primary-text">{{$data->name}}</h6>

            <h6 class="secondary-text">{{$data->level->name}} </h6>
           <br>
            {!! QrCode::size(100)->generate("id.maesalab.net/id/$data->id"); !!}

        </div>




</div>
</div>

</body>
</html>
<?>