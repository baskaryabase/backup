<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                          <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/{version}/css/bootstrap-combined.min.css" rel="stylesheet"> 


<div class="container">
          		
  <!-- Slider -->
  <div class="row">
    <div class="col-md-12" id="slider">
      <!-- Top part of the slider -->
      <div class="row">
        <div class="col-md-12" id="carousel-bounding-box">
          <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item" data-slide-number="0"><img src="http://placehold.it/770x300&amp;text=video one"></div>
              <div class="item" data-slide-number="1"><img src="http://placehold.it/770x300&amp;text=video two"></div>
              <div class="item" data-slide-number="2"><img src="http://placehold.it/770x300&amp;text=video three"></div>
              <div class="item" data-slide-number="3"><img src="http://placehold.it/770x300&amp;text=video four"></div>
              <div class="item" data-slide-number="4"><img src="http://placehold.it/770x300&amp;text=video five"></div>
              <div class="item" data-slide-number="5"><img src="http://placehold.it/770x300&amp;text=video six"></div>
              <div class="item" data-slide-number="5"><img src="http://placehold.it/770x300&amp;text=video seven"></div>
            </div>
            <!-- Carousel nav -->
           </div>
        </div>
<style type="text/css">
	.col-xs-2{
		/*padding-right: 0;*/
		padding-left: 0;
		margin-left: auto;
		margin-right: auto;
	}
	ul{
		margin-left: -40px;
	}
</style>        
        
    </div>
  </div> <!--/Slider-->
  
  <div class="row-fluid hidden-phone" id="slider-thumbs">
    <div class="col-xs-12">
      <!-- Bottom switcher of slider -->
      <ul style="list-style: none" class="thumbnails">
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-0">
            <img src="http://placehold.it/170x100&amp;text=one">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-1">
            <img src="http://placehold.it/170x100&amp;text=two">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-2">
            <img src="http://placehold.it/170x100&amp;text=three">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-3">
            <img src="http://placehold.it/170x100&amp;text=four">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-4">
            <img src="http://placehold.it/170x100&amp;text=five">
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>


<script type="text/javascript">
	$('#myCarousel').carousel({
                interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
</script>

