<form id="registration_form" action="<?php echo BASE_URL;?>manageprofile/<?php echo $task?>" method="post">

<fieldset>
<legend>Update Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100" required="password" />

<label for="password">Retype Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password2" name="password2" value="<?php echo $password;?>" maxlength="100" required="password" />


<br />

<button id="submit" type="submit" class="btn btn-primary" onsubmit="ValidateForm() & PasswordCheck()">Update Information</button>
</fieldset>
</form>


<script>
function ValidateForm() 
{
    var x = [document.forms["registration_form"]["first_name"].value, 
             document.forms["registration_form"]["last_name"].value,
             document.forms["registration_form"]["email"].value,
             document.forms["registration_form"]["password"].value,
             document.forms["registration_form"]["password2"].value,
            ]
    for(i = 0; i < x.length; i++)
    {
        if (x[i] == "") 
        {
            alert("Name must be filled out");
            return false;
        }
    }
}

function PasswordCheck()
{
var pass1 = document.forms["registration_form"]["password"].value;
var pass2 = document.forms["registration_form"]["password2"].value;

if (pass1 !== pass2)
{
    return false;
}

</script>