@extends('layout.master')

@section('content')
<div class="container content z-depth-1 ">
	<div class="row">
    <div class="col s12 m10 offset-m1">
      <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col s12 m7">
                <h4><strong>Aktuális Akciók</strong></h4><div class="divider"></div>
                <p>> Az otthon az, ahol biztonságban érezzük magunkat - 2017. éves termékakció</p>
                <a href="<?php echo url(); ?>/akcio.pdf" target="_blank">
                  <img src="<?php echo url(); ?>/img/akcio.jpg" class="responsive-img" alt="akciok"><br>
                  részletek>>>
                </a>
          </div>
          <div class="col s12 m4 card-item">
            <div class="card blue-grey darken-1">
                  <div class="card-content white-text center-align">
                    <p><strong>Kaput szeretne rendelni? <br>Javításra van szüksége?</strong></p>
                    <p>Kedvező ajánlataink magas szakértelemmel társulnak. Keressen bizalommal.</p>
                  </div>
                  <div class="card-action">
                    <a class="btn waves-effect waves-light blue darken-4" href="/contact">Kapcsolat</a>
                    <a class="btn waves-effect waves-light orange darken-3" href="http://www.garazskapu-bekescsaba-gyula.hu/ajanlatkeres" target="_blank">Ajánlatkérés</a>
                  </div>
              </div>
          </div>
        </div>
            <div class="divider"></div>
          <div class="container akcio-content">
            <h5>Garázskapuk betörésvédelmi funkcióval - MABISZ ajánlással</h5>
            <p>A Hörmann meghajtással szerelt Hörmann garázskapuk<br>
              <strong><em>"Teljeskörű mechanikai védelem alkotóeleme - 3 perces áttörésgátlás idővel" </em></strong>ajánlással rendelkeznek.</p>
              <p><strong>A Magyar Biztosítók Szövetsége tanúsítja a betörésvédelmi funkciót és ajánlja a termék felhasználását vagyonvédelmi célra. </strong></p>
              <p>A Magyar Biztosítók Szövetsége tanúsítja a betörésvédelmi funkciót és ajánlja a termék felhasználását vagyonvédelmi célra.</p>
              <p>A MABISZ ajánlás az alábbi termékekre vonatkozik:</p>
              <ul class="collection ">
                <li class="collection-item "><i class="tiny material-icons">send</i> LPU40, EPU40, LTH40 és RenoMatic, RenoMatic light garázskapuk</li>
                <li class="collection-item"><i class="tiny material-icons">send</i> ProMatic, SupraMatic, ProLift  meghajtások</li>
              </ul>
              <p class="center-align">Részletek a minősítésben.<br><strong> Letölthető minősítés </strong><a href="http://www.hormann.hu/fileadmin/_country/hoermann.hu/_data/Dokumentumok/2016/MABISZ_garazskapu_2013_2018.pdf" target='_blank'> >>>PDF.</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
