<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="alternate" href="http://mattresszombie.com/index.php" hreflang="en-us" />
        <meta charset="utf-8">
        <meta name="description" content="Mattresszombie all about mattress, learn how to choose a mattress,  find the best one, United States of America, Europe, mattress science, learning service, how to choose a mattress.">
        <meta name="Keywords" content="Mattresszombie, all about mattress, how to choose a mattress,  find the best mattress, United States of America, Europe, mattress science, mattress education, mattress school, mattress info, learning service, select best mattress for you, back ache, lumbar pain, changig mattress, how to select the best mattress for me." /> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>
            MattressZombie
        </title>
       <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/head.php';?>
        <script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
</script>
<script>
$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$("header").removeClass("large").addClass("smaller");
	} else {
		$("header").removeClass("smaller").addClass("large");
	}
	
});
</script>
    </head>
    <body>
      <div id="fixed">     
         <header >
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
            <div id="container">
                <img alt="mattresszombie" src="/images/front-pic4-web.jpg">
            </div>
            
             <div id="yellow">
                <p>A MATTRESS MASTER SITE</p>
            </div> 
            
            <div id="prueba-block1">
                <h2>We are going to make mattress shopping simple!</h2>
                <p>This is an informational website to provide the facts about mattresses.</p>
                <p>We have no affiliation with any manufacturer, any retailer, any website, nor any brand.</p>
                <p><strong>Let's get started!</strong></p>
            </div>
       
           <!-- TABLE W/ BLUE BUTTOMS front page-->
           <section id='main-white'>
  <table class="responsive2">
    <thead>
    <tr>
        <td colspan="3" id="horizontal2"><a href="/how_to_choose.php"><img src="/images/How-To-Choose.png" alt="how to choose a Mattress"></a></td>
    </tr>
    </thead>
    <tbody>
     <tr class="large">
         <td span class="label2"><a href="/MattressSchool/mattress_school.php"><img src="/images/mattress_school_buttom_web.png" alt="Mattress School"></a></td>
         <td span class="label2"><a href="/comparison.php"><img src="/images/mattress_comparison_buttom_web.png" alt="Mattress School"></a></td>
         <td span class="label2"><a href="/MattressArticles/mattress_articles.php"><img src="/images/mattress_articles_buttom_web.png" alt="Mattress School"></a></td>
    </tr>
    <tr class="large">
        <td span class="vertical2"><a href="/MattressSchool/mattress_school.php">MATTRESS SCHOOL</a></td>
        <td span class="vertical2"><a href="/comparison.php">MATTRESS COMPARISON</a></td>
        <td span class="vertical2"><a href="/MattressArticles/mattress_articles.php">MATTRESS ARTICLES</a></td>
     </tr>
    </tbody>
</table>
           
<table class="responsive3">
    <thead>
     <tr class="small">
         <td span id="horizontal3"><a href="/how_to_choose.php"><img src="/images/How-To-Choose2.png" alt="how to choose a Mattress"></a></td>
     </tr>
    </thead>
    <tbody>
      <tr class="small">
          <td span class="label3"><a href="/MattressSchool/mattress_school.php"><img src="/images/mattress_school_buttom_web.png" alt="Mattress School"></a></td>
       </tr>
       <tr class="small">
       <td span class="vertical3"><a href="/MattressSchool/mattress_school.php">MATTRESS SCHOOL</a></td>
       </tr> 
       <tr class="small">
           <td span class="label3"><a href="/comparison.php"><img src="/images/mattress_comparison_buttom_web.png" alt="Mattress School"></a></td>
        </tr>
        <tr class="small">
       <td span class="vertical3"><a href="/comparison.php">MATTRESS COMPARISON</a></td>
       </tr> 
        <tr class="small">
            <td span class="label3"><a href="/MattressArticles/mattress_articles.php"><img src="/images/mattress_articles_buttom_web.png" alt="Mattress School"></a></td>
    </tr>
    <tr class="small">
        <td span class="vertical3"><a href="/MattressArticles/mattress_articles.php">MATTRESS ARTICLES</a></td>
     </tr>
    </tbody>
</table>

           
  <!--RED BLOCK--> 
            <div id="green_block">
                 <h2>WHAT DO YOU GET HERE?</h2>
                <h3>Expertise:</h3>
                <p>75 years' experience in all aspects of the bedding industry --- from conception, to manufacturing, to sales.</p>
                <h3>Customization:</h3>
                <p>There is the perfect mattress for everyone. You will learn how to find your perfect mattress here.</p>
            </div>
            
  <!--Text Front Page -->
            <div>
              <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/front_page.php';?> 
            </div>
           </section>    
             <br>
           
        </main>
        <footer>
             <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/footer.php';?>
        </footer>
    </body>