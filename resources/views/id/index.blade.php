<?php>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Id Maesalab</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">

    

</div>

<div class="w3-container">

  <div class="w3-card-5 " style="width:50%;margin:auto;background-image: linear-gradient(180deg, #6237a0, white);">

    <div class="w3-container w3-center">
          <h3>{{$data->level->name}}</h3>
        <img style="margin:auto;object-fit: cover;border-radius: 50%;height: 200px;width: 200px;border: 5px solid black;" src="{{ URL::asset('images/') }}/{{$data->images}}" alt="Avatar">

      <h5>{{$data->name}}</h5>
      {!! QrCode::size(100)->generate("id.maesalab.net/id/$data->id"); !!}

      <div class="w3-section" style="height:10px">
        
      </div>

    </div>

  </div>
</div>

</body>
</html>
<?>