
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>


    </div>

<div style="text-align:center">
<?php
if($u->isRegistered()){
  include ('views/elements/comment_form.php');
}
else{
 echo '<button><a href="<?php echo BASE_URL?>login/">Login to Comment!</a></button>';
}

?>
</div>
<div style="text-align:center"> 
<h2>Comments:</h2>

<div class="container">
        <div class="page-header">

            <h1><?php echo $firstname;?></h1>
        </div>
        <p><?php echo $comment;?></p>
        <sub><?php echo 'Posted by ' . '<a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name; ?>
        </sub>
</div>

<?php include('views/elements/footer.php');?>