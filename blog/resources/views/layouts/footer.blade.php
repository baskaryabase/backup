  @section('footer')

 <footer class="footer">
        <div class="container">
          <p class="text-muted"> Copyright 2017 Startups Club Services Pvt Ltd. </p>
        </div>
      </footer>

      <script>
     
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96616107-1', 'auto');
  ga('send', 'pageview');

  (function() {

 var interakt = document.createElement('script');

 interakt.type = 'text/javascript'; interakt.async = true;

 interakt.src = "//cdn.interakt.co/interakt/012305b2df4bfdf6bbf4f38a42f0b4d3.js";

 var scrpt = document.getElementsByTagName('script')[0];

 scrpt.parentNode.insertBefore(interakt, scrpt);

 })()


  window.mySettings = {

  email: "<?php echo session()->get('email'); ?>",

  created_at: <?php echo strtotime(session()->get('created_date')); ?>,
      app_id: '012305b2df4bfdf6bbf4f38a42f0b4d3'

  };

</script>



          @stop