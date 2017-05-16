<!DOCTYPE html>
<html>
<head>
	@include('includes.header')
	<title>Maxo Irányítástechnika</title>
</head>
<body>
	@include('includes._navbar')
	@include('includes._carousel')




	@yield('content')



	<!-- Content END -->

	<!--Footer -->

  <footer class="page-footer orange darken-2 ">
    <div class="footer-copyright indigo darken-3">
      <div class="container">
        <strong>&copy; 2017 Hörmann. Minden jog fenntartva.</strong>
        <a class="right footer-link" href="mailto:maxo@maxo.hu">Üzenet</a>
        <a class="right footer-link hide-on-small-only" href="http://www.hormann.hu/dokumentaciok/" target="_blank">Dokumentáció</a>
        <a class="right footer-link hide-on-small-only" href="http://www.garazskapu-bekescsaba-gyula.hu/ajanlatkeassets" target="_blank">Ajánlatkérés</a>
      </div>
    </div>
  </footer>
    <script type="text/javascript" src="<?php echo url('');?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo url();?>/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo url();?>/js/main.js"></script>
		@include('includes.pagescript')
</body>
</html>
