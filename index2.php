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
        
        <style>
header.smaller {
	height: 45px;
}
header.smaller #logo {
	width: auto;
	height: 30px;
        text-align: left;
        padding-left: 40px;
	margin: 0;
        background-color: #fff;
}
header.smaller nav a {
	line-height: 25px;
}

*,
*:before,
*:after {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
/*
body {
	color: #505050;
	font-family: "Open Sans", sans-serif;
	font-weight: 300;
	font-size: 16px;
	line-height: 1.8;
}

h1, h2, h3, h4, h5, h6 {
	line-height: 1;
	font-weight: 100;
	color: #77C7AC;
}
*/
a {
	text-decoration: none;
	color: #fcfcfc;
	font-weight: 300;
}

a:hover {
	color: #3c3c3c;
}

#wrapper {
	width: 100%;
	margin: 0 auto;
}

#main {
	background-color: #fff;
	padding-top: 150px;
        min-height:500px;
}

.container {
	width: 80%;
	margin: 0 auto;
	padding: 0 30px;
}

section {
	padding: 60px 0;
}

section h1 {
	font-weight: 700;
	margin-bottom: 10px;
}

section p {
	margin-bottom: 30px;
}

section p:last-child {
	margin-bottom: 0;
}

section.color {
	background-color: #f4f4f4;
}

header {
	width: 100%;
	height: 10em;
	overflow: hidden;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 999;
        border-bottom: solid 0.5em #f4f4f4;
	background-color: #fff;
	transition: height 0.3s;
}

header #logo {
	display: inline-block;
	line-height:3em;
        margin: 0;
        padding:0 1em;
        background-color:#fff;
	text-align: center;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

header nav {
	display: inline-block;
	float: right;
}

header nav a {
	line-height: 150px;
	margin-left: 20px;
	color: #fcfcfc;
	font-weight: 300;
	font-size: 1em;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

header nav a:hover {
	color: #fd5559;
}

header.smaller {
	height: 65px;
}

header.smaller #logo {
	line-height: 65px;
}

header.smaller nav a {
	line-height: 65px;
}



.clearfix:after {
	visibility: hidden;
	display: block;
	content: "";
	clear: both;
	height: 0;
}
/*
@media all and (max-width: 760px) {
	header #logo {
		display: block;
		float: none;
		margin: 0 auto;
		height: 100px;     
		line-height: 80px;
		text-align: center;
	}

	header nav {
		display: block;
		float: none;
		height: 50px;
		text-align: center;
		margin: 0 auto;
	}

	header nav a {
		line-height: 50px;
		margin: 0 10px;
	}

	header.smaller {
		height: 75px;
	}

	header.smaller #logo {
		height: 40px;
		line-height: 40px;
		font-size: 30px;
     width:100%;
	}

	header.smaller nav {
		height: 35px;
	}

	header.smaller nav a {
		line-height: 35px;
	}
 

}

@media all and (max-width: 600px) {
	.container {
		width: 100%;
	}

	footer a {
		display: block;
	}
}


*/            
        </style>
        
        <script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
        
  </script>
  <script>
   //logo and resize
        function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 200,
  headerEl = document.getElementById('js-header');
  
  if (distanceY > shrinkOn) {
    headerEl.classList.add("smaller");
  } else {
    headerEl.classList.remove("smaller");
  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);

</script>
    </head>
    <body>
        <div id="no-fixed">
           
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
            <div id="other_yellow">
                <p>A MATTRESS MASTER SITE</p>
            </div> 
            
            <!--NEW -->
            
           <div id="wrapper">
  <header id="js-header">
      <div class="container clearfix">
          <div id="logo"><a href="/index.php"><img src="/images/LogoIdeas9_web.png" title="MattressZombie"></a>
          </div>
              <nav>
              <a href="#bacon">Bacon</a>
              <a href="#sausage">Sausage</a>
              <a href="#biltong">Biltong</a>
          </nav>
      </div>
  </header>
           </div>
  <div id="main">
      <div id="content">
          <section>  
              <div class="container">
                  <h1>I Second That Emotion</h1> 
              </div>
          </section>
      </div>
  </div>
            
           <!--new try
           <div id="prueba-block1">
               <p>Informational website to provide the facts about mattresses</h2>
               <p>There is no affiliation with any manufacturer, any retailer, any website, nor any brand.</p>
           </div>
            
           <div id='prueba-block2'>
               <img src='images/mattress_school_glossary_web.jpg' alt='all about mattress'>
           </div>
             
           <div id='prueba-block3'>
               <h2>LEARN HOW TO CHOOSE A MATTRESS</h2>
           </div>
           
           <div id='prueba-block4'>
               <img src='/images/mattress_school_care_web.jpg' alt='all about mattress'>
           </div>
           
           <div id='prueba-block5'>
               
           </div>
           <!-- BLUE BUTTOMS
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

     
            <tr class="small">
         <td span id="horizontal3"><a href="/how_to_choose.php"><img src="/images/How-To-Choose2.png" alt="how to choose a Mattress"></a></td>
    </tr>
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
     
     -->
           
  <!--RED BLOCK--> 
            <div id="prueba-block6">
                 <h2>WHAT DO YOU GET HERE?</h2>
                <h3>Expertise:</h3>
                <p>75 years of bedding know- how to direct and consult you through the process.</p>
                <h3>Customization:</h3>
                <p>We will teach you how to know for certain, you are getting the perfect fit mattress.</p>
            </div>
            
            <div>
              <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/front_page.php';?> 
            </div>
         
             <br>
           
        </main>
        <footer>
             <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/footer.php';?>
        </footer>
    </body>