<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Join</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
  </head>

  <body>
  	<div class="container">
    <h1>Create User</h1>
    <p>Please enter the users information below.</p>
    <?php if($message){?>
    <div class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> <?php echo $message;?>
    </div>
    <?php } ?>
		<?php 
		$attributes = array('class' => 'form-horizontal', 'id' => 'join');
		echo form_open("auth/create_user", $attributes);?>
    
          <div class="control-group">
                <label class="control-label" for="full_name">Full Name</label>
                <div class="controls">
                <?php echo form_input($full_name);?>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                <?php echo form_input($email);?>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                <?php echo form_input($password);?>
                </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="password_confirm">Confirm Password</label>
                <div class="controls">
                <?php echo form_input($password_confirm);?>
                </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Submit</button>
            </div>
          </div>
    
		<?php echo form_close();?>
    </div>
</body>
</html>