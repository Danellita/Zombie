<?php
$name = $_POST['name'];

if (isset($_POST['submit'])) {
  $to = 'cs@mattresszombie.com';
  $subject = 'Form from my site';
  $composition = 'Name: ' . $name . "\r\n\r\n";
  $composition .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
  $composition .= 'Comments: ' . $_POST['message'];
  $headers = "From: webmaster@mattresszombie.com\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  IF ($email){
      $headers .= "\r\nReply-To: $email";
  }
  $success = mail($to, $subject, $composition, $headers);
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="alternate" href="http://mattresszombie.com/index.php" hreflang="en-us" />
        <meta charset="utf-8">
        <meta name="description" content="Mattresszombie all about mattress, learn how to choose a mattress,  find the best one, United States of America, Europe, mattress science, learning service, how to choose a mattress.">
        <meta name="Keywords" content="what mattress is best?, choosing the best mattress, selecting a mattress, better mattress, choosing a mattress, mattresszombie, all about mattress, glossary, meaning, all about mattress, mattress terminology, how to choose a mattress,  find the best mattress, United States of America, Europe, mattress science, mattress education, mattress school, mattress info, learning service, select best mattress for you, back ache, lumbar pain, changig mattress, how to select the best mattress for me." /> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>
            Thank You from MattressZombie
        </title>
       <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/head.php';?>
   <script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
</script>
    </head>
    <body>
        <div id="fixed">
           
            <header>
            <nav>
            <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/mini_nav.php';?>
            </nav>
            <div>     
            <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/header.php';?>
            </div>
        </header>
        <nav>
            <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/nav_main.php';?>
        </nav>
        </div>

        <main>
             <!--Breadcrumb on top-->
		<div class="breadcrumb">
                     <ul class="breadcrumb-ul">
                         <li class="breadcrumb-item"><a href="http://mattresszombie.com" title="Home">Home ></a></li>
                         <li class="breadcrumb-item">Thank You!</li>
                     </ul>		
                </div>
            
            
             <div id="contact-main-body">
            <h1 class='articles-title'>THANK YOU!</h1>
            <hr id="contact-line">
             <section id="thankyou">         
                    <p class='articles-main-paragraph'><strong>Hi <?php echo $name;?>, </strong></p>
                        <br>
                    <?php if(isset($success) && $success){ ?>
                    <p class='articles-main-paragraph'>Thank You for your submission!</p>
                    <p class='articles-main-paragraph'>Your input was received and</p>
                    <p class='articles-main-paragraph'>we will reply directly to you,</p>
                    <p class='articles-main-paragraph'>or publish an article about your request!</p>
                    <?php }
                    
                    else{ ?>
                    <h1 class='articles-title'>Oops!</h1>
                    <<p class='articles-main-paragraph'>Sorry, there was a problem sending your message.</p>
                    <?php } ?> 
               </section>      
             </div>
    
            <!--SIDE BAR -->
             <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/side.php';?>
   <br>  
        </main>
        <footer>
             <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/footer.php';?>
        </footer>
    </body>