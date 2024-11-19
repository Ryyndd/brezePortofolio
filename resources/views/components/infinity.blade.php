<link rel="stylesheet" href="{{ asset('source/infinity.css') }}"> 
<div class="wrapper">
    @foreach ( $infinity as $data )
    
    <div class="itemLeft item1"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item2"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item3"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item4"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item5"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item6"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item7"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    <div class="itemLeft item8"> <img src="{{ $data->tech_image }}" alt="ini" /> </div>
    
    @endforeach

    
  </div>