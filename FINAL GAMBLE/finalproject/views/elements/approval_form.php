<form id="approal_form" action="<?php echo BASE_URL;?>approve/approve" method="post">

<fieldset>
<legend>Approve User</legend>
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" id="email" name="email" value="<?=$_POST['email']?>" maxlength="50" required="email" />
<br />
            
<br />
 
<button id="submit" type="submit" class="btn btn-primary" >Submit Approval</button>
</fieldset>
</form>