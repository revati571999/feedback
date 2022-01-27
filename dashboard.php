<?php 
 session_start();
 $username=$_SESSION['sid'];
 if(empty($username)){
   header("location:login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
            <!-- Including head tags and other scripting files. -->
<?php include('head.php')?>     
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">FeedBack Process</h1>
       
    </div>
    </div>
    <section class="container">
        <section class="row">
            <section class="col-md-12 border">
                <!-- open pages on get -->
            <?php 
                switch(@$_GET['con']){
                    case 'step2':
                        include('step2.php');
                        break;
                    case 'step3':
                        include('step3.php');
                        break;
                    default:
                        include('step1.php');      
                }
            
            
            ?> 
            </section>
        </section>
        

    </section>
    
    <?php include('foot.php')?>
</body>
</html>