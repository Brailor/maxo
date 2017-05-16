@extends('layout.master')

@section('content')
<div class="container content z-depth-1 ">
	<div class="row">
    <div class="col s12 m10 offset-m1 l10 offset-l1 ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="center-align"><strong>Kapcsolat</strong></h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col s12 m5 l5">
							<h4><strong>Elérhetőségek:</strong></h4>
							<hr>
								<ul class="collapsible" data-collapsible="accordion">
							    <li>
							      <div class="collapsible-header active"><i class="material-icons">place</i><strong>Békéscsaba</strong></div>
							      <div class="collapsible-body"><span>
											<p><strong>Név: </strong>MAXO Irányítástechnika, Maczkó István, egyéni vállalkozó</p>
			                <p><strong>Telephely: </strong>5600 Békéscsaba, Madách u. 9.</p>
			                <p><strong>Mobil: </strong> +36 30 9 537 428</p>
			                <p><strong>Email: </strong><a href="mailto:maxo@maxo.hu"> [ maxo@maxo.hu ] </a></p>
			                <p><strong>Tulajdonos: </strong> Maczkó István</p>
			                <p><strong>Alapítás kelte: </strong> 1993</p>
			                <p><strong>Váll.eng.szám: </strong> EV-846069</p>
			                <p><strong>Adószám: </strong> 44517791-2-24</p>
			                <p><strong>Bank: </strong> OTP Bank Nyrt.</p>
									</span></div>
							    </li>
							    <li>
							      <div class="collapsible-header"><i class="material-icons">place</i><strong>Budapest</strong></div>
							      <div class="collapsible-body"><span>
											<p><strong>Név: </strong>Beartech Irányítástechnika, Maczkó Andor, egyéni vállalkozó</p>
			                <p><strong>Telephely: </strong>1063 Budapest, Bajnok u. 27.</p>
			                <p><strong>Mobil: </strong> +36 70 3 959 501</p>
			                <p><strong>Email: </strong><a href="mailto:maczko.andor@outlook.com"> [ maczko.andor@outlook.com ] </a></p>
											<p><strong>Weblap: </strong><a href="http://beartech.hu" target="_blank"> [ http://beartech.hu/ ]</a></p>
			                <p><strong>Tulajdonos: </strong> Maczkó Andor</p>
										</span></div>
							    </li>
							    <li>
							      <div class="collapsible-header"><i class="material-icons">place</i><strong>Gyula</strong></div>
							      <div class="collapsible-body"><span>
											<p><strong>Név: </strong>Balázs és Trs.Bt</p>
											<p><strong>Cégvezető: </strong>Balázs Lajos</p>
			                <p><strong>Telephely: </strong>5700. Gyula, Csabai  út 40.</p>
			                <p><strong>Mobil: </strong> +36 30 9 682 236</p>
			                <p><strong>Email: </strong><a href="mailto:balazskapu@t-online.hu"> [ balazskapu@t-online.hu ] </a></p>
										</span></div>
							    </li>
									<li>
							      <div class="collapsible-header"><i class="material-icons">place</i><strong>Hévíz</strong></div>
							      <div class="collapsible-body"><span>
											<p><strong>Név: </strong>Fehér András egyéni vállalkozó</p>
			                <p><strong>Telephely: </strong>8380. Hévíz, Fenyő utca 1.</p>
			                <p><strong>Mobil: </strong> +36 30 2 686 815</p>
			                <p><strong>Email: </strong><a href="mailto:fitechinfo@freemail.hu"> [ fitechinfo@freemail.hu ] </a></p>
										</span></div>
							    </li>
							  </ul>
            </div>
            <div class="col s12 m7 l7">
              <iframe class="z-depth-1 map-container" width="100%" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/d/u/0/embed?mid=1zNK7DzUNdv0EMbMxkhzN08mTNpI" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
