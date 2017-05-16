

    <img src="{{ $product['links']['img'] }}" class="responsive-img" alt="{{$termek}}-background">
    <div class="divider"></div>
  </div>
  <div class="pdf-content z-depth-1">

    @foreach($product['links']['pdf'] as $pdf )
    <div class="pdf-item center-align">
      <h7><strong>{{ $pdf['name']}}</strong></h7>
        <a href="{{ $pdf['link']}}"target="_blank">
            <img src="{{ $pdf['img']}}" class="responsive-img" alt="{{ $pdf['name']}}">
          <p>  PDF letöltése</p></a>
    </div>
    @endforeach

  </div>
  <div class="body">
    <h4>{{ $product['title']}}</h4>
    <div class="divider"></div>
    <p>{{ $product['body']}}</p>
    </div>

  <a class="btn" style="margin-top: 15px; margin-left: 5px; text-shadow:0px 0px;" href="/termekek/{{$termek}}">Vissza</a>
  </div>
  </div>
</div>
