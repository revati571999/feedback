   
<?php 
// logout session
if(isset($_POST['logout'])){
    header("location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- include head tags and other scripts/links -->
<?php include('head.php')?>

</head>
<body>
    <section class="container">
        <div class="jumbotron">
        <h1 class="display-4">FeedBack Submitted Successfully !</h1>
        <hr class="my-4">
        </div>
           <!--  form -->
           
    </section>
    <section class="container-fluid">

    <!-- include script tags. -->
    <?php include('foot.php')?>
</body>
</html>