       <?php 
/*echo '<pre>';
print_r($details);
echo '</pre>';*/
       ?>

       <div class="row">
         <div class="form-group">
           <label for="password" class="col-sm-5 control-label">  <p>Pioneer Members</p></label>
    <label class="radio-inline"><input type="radio" onclick="pioneer_radio(this)" <?php echo (isset($details['pioneer']))?'checked':''; ?> value="yes" name="pioneer_radio">Yes</label>
<label class="radio-inline"><input type="radio" onclick="pioneer_radio(this)" <?php echo (!isset($details['pioneer']))?'checked':''; ?> value="no" name="pioneer_radio">No</label>
      </div> 
      </div> 
<div id="pioneer_yes" <?php echo (!isset($details['pioneer']))?'style="display:none"':''; ?>>
<div class="row">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" id="p_comment" placeholder="comments" value="<?php echo (isset($details['pioneer']))?$details["pioneer"]["comment"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
      <div class="row">
      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" id="p_comment_head" placeholder="comments by head" value="<?php echo (isset($details['pioneer']))?$details["pioneer"]["comment_head"]:''; ?>" class="form-control" required="">
      </div> 

        <div class="col-sm-6">
          <input type="text" id="p_closed_by" placeholder="Closed By" value="<?php echo (isset($details['pioneer']))?$details["pioneer"]["closed_by"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
</div>
      <div class="row">
      <div class="form-group">
           <label for="password" class="col-sm-5 control-label">  <p>Valuekit</p></label>
    <label class="radio-inline"><input type="radio" onclick="valuekit_radio(this)" <?php echo (isset($details['valuekit']))?'checked':''; ?> value="yes" name="valuekit_radio">Yes</label>
<label class="radio-inline"><input type="radio" onclick="valuekit_radio(this)" <?php echo (!isset($details['pioneer']))?'checked':''; ?> value="no" name="valuekit_radio">No</label>
      </div> 
      </div> 
    <div id="valuekit_yes" <?php echo (!isset($details['valuekit']))?'style="display:none"':''; ?>>
<div class="row">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" id="v_comment" placeholder="comments" value="<?php echo (isset($details['valuekit']))?$details["valuekit"]["comment"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
      <div class="row">
      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" id="v_comment_head" placeholder="comments by head" value="<?php echo (isset($details['valuekit']))?$details["valuekit"]["comment_head"]:''; ?>" class="form-control" required="">
      </div> 

        <div class="col-sm-6">
          <input type="text" id="v_closed_by" placeholder="Closed By" value="<?php echo (isset($details['valuekit']))?$details["valuekit"]["closed_by"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
</div>
      <div class="row">
      <div class="form-group">
           <label for="password" class="col-sm-5 control-label">  <p>Member partner</p></label>
    <label class="radio-inline"><input type="radio" onclick="mp_radio(this)" <?php echo (isset($details['member_partner']))?'checked':''; ?> value="yes" name="mp_radio">Yes</label>
<label class="radio-inline"><input type="radio" onclick="mp_radio(this)" <?php echo (!isset($details['member_partner']))?'checked':''; ?> value="no" name="mp_radio">No</label>
      </div> 
      </div> 
    <div id="mp_yes" <?php echo (!isset($details['member_partner']))?'style="display:none"':''; ?>>
<div class="row">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" id="m_comment" placeholder="comments" value="<?php echo (isset($details['member_partner']))?$details["member_partner"]["comment"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
      <div class="row">
      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" id="m_comment_head" placeholder="comments by head" value="<?php echo (isset($details['member_partner']))?$details["member_partner"]["comment_head"]:''; ?>" class="form-control" required="">
      </div> 

        <div class="col-sm-6">
          <input type="text" id="m_closed_by" placeholder="Closed By" value="<?php echo (isset($details['member_partner']))?$details["member_partner"]["closed_by"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
</div>
      
      <div class="row">
      <div class="form-group">
           <label for="password" class="col-sm-5 control-label">  <p>Sponsership</p></label>
    <label class="radio-inline"><input type="radio" onclick="sponser_radio(this)" <?php echo (isset($details['sponsor']))?'checked':''; ?> value="yes" name="sponser_radio">Yes</label>
<label class="radio-inline"><input type="radio" onclick="sponser_radio(this)" value="no" <?php echo (!isset($details['sponsor']))?'checked':''; ?> name="sponser_radio">No</label>
      </div>
      </div>

     <div id="sponser_yes" <?php echo (!isset($details['sponsor']))?'style="display:none"':''; ?>>
<div class="row">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" id="s_comment" placeholder="comments" value="<?php echo (isset($details['sponsor']))?$details["sponsor"]["comment"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
      <div class="row">
      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" id="s_comment_head" placeholder="comments by head" value="<?php echo (isset($details['sponsor']))?$details["sponsor"]["comment_head"]:''; ?>" class="form-control" required="">
      </div> 

        <div class="col-sm-6">
          <input type="text" id="s_closed_by" placeholder="Closed By" value="<?php echo (isset($details['sponsor']))?$details["sponsor"]["closed_by"]:''; ?>" class="form-control" required="">
      </div> 
      </div> 
      </div> 
</div>