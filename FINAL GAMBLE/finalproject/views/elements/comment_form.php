<form id="comment_form" action="<?php echo BASE_URL;?>post/commentsubmitted" method="post">

<fieldset>
<legend>Share your thoughts!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
<br />

<label for="comment">Comment: <?=REQFIELD?></label>
<textarea name="comment" id="comment" required="comment"></textarea>

<br />
 
<button id="submit" type="submit" class="btn btn-primary">Submit Comment</button>
</fieldset>
</form>

</script>