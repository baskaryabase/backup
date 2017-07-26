    <?php 

/*echo '<pre>';
print_r($details);
echo '</pre>';*/

    ?>
    <form action="">
      <h1>Edit Company Details</h1>
      <input type="hidden" name="hidden_image" id="hidden_image" name="" value="{{ $details['data']['startup_logo'] }}">

      <div>
        <input type="text" placeholder="Edit Company Name" value="{{ $details['data']['startup_name'] }}" required="" id="startup_name" />
      </div>
      <div>
        <img id="display_pic" class="logo_edit" src="https://media.glassdoor.com/sql/456666/great-little-box-company-squarelogo-1448432988828.png">
        <p>change the logo</p>
        <!-- <center> <span class="btn btn-default btn-file"><span></span><input type="file" onchange="startup_logo1()" id="startup_logo" /></span></center> -->
        <div class="container">
        <span class="select-wrapper">
        <input type="file" onchange="startup_logo1()" id="startup_logo" />
        </span>
        </div>
      </div>
      <div>
        <input type="text" placeholder="Location" value="{{ $details['data']['sc_location'] }}" required="" id="sc_location" />
      </div>
      <div>   
                            <select class="select-style form-control" name="startup_industry" id="startup_industry">
    <option disabled>Startup industry</option>
    <?php
   $ind = array('Advertising', 'Aeronautics/Aerospace', 'Agriculture', 'AI', 'Analytics',
  'Animation', 'AR/VR (Augmented + Virtual)', 'Architecture', 'Art & Photography', 'Automotive', 'Beauty',
  'Computer Vision', 'Construction', 'Consumer Goods', 'Dating/Matrimonial ', 'Defence', 'Design', 'Education',
  'Big Data', 'Careers', 'Communication',
  'Energy & Sustainability', 'Enterprise Software', 'Events', 'Fashion', 'Finance Technology', 'Food & Beverages',
  'Gaming', 'Gifting', 'Grocery', 'Hardware', 'Healthcare',
  'Human Resources', 'Information/Tech', 'Internet of Things', 'IT Services', 'Legal',
  'Logistics', 'Manufacturing', 'Marketing', 'Media & Entertainment', 'Nanotechnology', 'Networking',
  'Pets & Animals', 'Printing', 'Real Estate', 'Retail', 'Robotics','Safety',
  'Security', 'Services', 'Social Impact', 'Social Network', 'Sports','Storage','Transportation','Other'
);
foreach ($ind as $key => $value) {

?>
    <option <?php if($value == $details['data']['startup_industry']){ echo 'selected'; } ?>>{{ $value }}</option>
  <?php } ?>

</select>
      </div>
      <div>
    <select class="select-style form-control select-style" name="startup_type" id="startup_employee">
    <option disabled>No of employees</option>
    <option <?php if('Idea stage' == $details['data']['startup_type']){ echo 'selected'; } ?>>Less than 10 employees</option>
  <option <?php if('Budding startup' == $details['data']['startup_type']){ echo 'selected'; } ?>>10 -20 employees</option>
  <option <?php if('Pre Revenue' == $details['data']['startup_type']){ echo 'selected'; } ?>>20 -50 employees</option>
      <option <?php if('Growth stage' == $details['data']['startup_type']){ echo 'selected'; } ?>>greater than 50</option>
</select>      </div>
      <div>
                      <select class="select-style form-control" name="startup_type" id="startup_type">
    <option disabled>Startup Type</option>
    <option <?php if('Idea stage' == $details['data']['startup_type']){ echo 'selected'; } ?>>Idea stage</option>
  <option <?php if('Budding startup' == $details['data']['startup_type']){ echo 'selected'; } ?>>Budding startup</option>
  <option <?php if('Pre Revenue' == $details['data']['startup_type']){ echo 'selected'; } ?>>Pre Revenue</option>
      <option <?php if('Growth stage' == $details['data']['startup_type']){ echo 'selected'; } ?>>Growth stage</option>
</select>
      </div>
      <div>
        <input type="url" placeholder="FB Id url" value="{{ $details['data']['fb_link'] }}" required="" id="startup_fb_url" />
      </div>
      <div>
        <input type="url" placeholder="google id url" required="" value="{{ $details['data']['google_url'] }}" id="startup_google_url" />
      </div>
      <div>
        <input type="url" placeholder="twitter id url" required="" value="{{ $details['data']['twitter_link'] }}" id="startup_twitter_url" />
      </div>
      <div>
        <input type="url" placeholder="website url" id="startup_website" value="{{ $details['data']['startup_website'] }}" required="" id="website" />
      </div>
      
      <div>
      <div>
        <input class="pull-right" type="button" id="save_company" data-id="{{ $details['data']['company_id'] }}" value="Submit" />
      </div>
    </form><!-- form -->
<script type="text/javascript">

function startup_logo1(){
/*$.loader.open();*/

    var file_data = $('#startup_logo').prop('files')[0];   
      var hidden_token=$('#hidden_token').val();
        var form_data = new FormData(); 
        var img=file_data.size;
        var imgsize=img/1024; 

if(imgsize > 2000){
  alert('The profile pic size should be less than 2 Mb');
   /*$.loader.close();*/
  return false;

}
        form_data.append('file', file_data); 
        form_data.append('_token', hidden_token); 
     
  jQuery.ajax({
                    url: '/upload_company_logo',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
 /*   $.loader.close();*/
                $('#hidden_image').val(value1);
var url="http://dev.startupsclub.org/image/company/"+value1;
                $('#display_pic').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

}


$('#save_company').click(function(){
var company_id=$(this).attr('data-id');
  $('.wpcf7-not-valid-tip').html('');
  var startup_name=$('#startup_name').val();
  var startup_website=$('#startup_website').val();
  var startup_twitter_url=$('#startup_twitter_url').val();
  var startup_google_url=$('#startup_google_url').val();
  var startup_fb_url=$('#startup_fb_url').val();
  var startup_type=$('#startup_type').val();
  var startup_employee=$('#startup_employee').val();
  var startup_industry=$('#startup_industry').val();
  var sc_location=$('#sc_location').val();
  var hidden_image=$('#hidden_image').val();

  var hidden_token=$('#hidden_token').val();
  var sam={
  startup_name : startup_name,
  startup_website : startup_website,
  startup_twitter_url : startup_twitter_url,
  startup_google_url : startup_google_url,
  startup_fb_url : startup_fb_url,
  startup_type : startup_type,
  startup_employee : startup_employee,
  startup_name : startup_name,
  startup_industry : startup_industry,
  sc_location : sc_location,
  hidden_image : hidden_image,
  company_id : company_id,

  _token: hidden_token,

}

jQuery.ajax({
                    url: '/UpdateCompanyDetails',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {


if(jQuery.trim(data.errors) != 'success'){
  $('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{
      window.location="http://dev.startupsclub.org/company/"+data.name;

}
}
})

})

</script>