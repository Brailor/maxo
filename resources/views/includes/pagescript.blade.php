<script type="text/javascript">
  (function(){

    if(!$("#{{$page}}").hasClass('nav-active')){
      $('.nav-wrapper').find('.nav-active').removeClass('nav-active');
      $("#{{$page}}").addClass("nav-active");
    }

})();
</script>
