
  @extends('layouts.PlainHeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
  @section('footer')
@include('layouts.footer')
@stop
   @section('content')

<link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('/css/demo_city.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('/css/js_composer.min.css') ?>" rel="stylesheet" type="text/css">
<body>
<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-sm-12">
					<div class="article-body">
						<section class="light-wrapper  vc_row wpb_row vc_row-fluid"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p>Checkout the pictures from the event below -</p>

		</div>
	</div>
<!-- vc_grid start -->
<div class="vc_grid-container-wrapper vc_clearfix">
	<div class="vc_grid-container vc_clearfix wpb_content_element vc_media_grid" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:2907,&quot;style&quot;:&quot;lazy&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1484048795663-db64d0d1-1ef6-0&quot;,&quot;items_per_page&quot;:&quot;5&quot;,&quot;tag&quot;:&quot;vc_media_grid&quot;}" data-vc-request="http://startupsclub.org/wp-admin/admin-ajax.php" data-vc-post-id="2907" data-vc-public-nonce="1ceef430a8">
	<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="postexpirator-css-css" href="http://startupsclub.org/wp-content/plugins/post-expirator/style.css?ver=4.6.6" type="text/css" media="all">
<div class="vc_grid vc_row vc_grid-gutter-10px vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">
	<div class="vc_pageable-slide-wrapper vc_clearfix" data-vc-grid-content="true">
	<?php foreach ($pics['main'] as $key => $value) {

		echo $img_url=URL::asset('/image/demoday/'.$pics['city'].'/'.$value['pic_name']);
	
?>
	
<?php } ?>

</div><div data-lazy-loading-btn="true" style="display: none;"><a href="http://startupsclub.org/demoday-vizag-17/"></a></div></div></div>
</div><!-- vc_grid end -->
</div></div></div></div></div></section>
					</div><!--end of article snippet-->
				</div>
				
				
				
			</div>
		</div>
	</section>
</body>

@stop