<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="alternate" href="http://mattresszombie.com/index.php" hreflang="en-us" />
        <meta charset="utf-8">
        <meta name="description" content="Mattresszombie all about mattress, learn how to choose a mattress,  find the best one, United States of America, Europe, mattress science, learning service, how to choose a mattress.">
        <meta name="Keywords" content="Mattresszombie, all about mattress, glossary, meaning, all about mattress, mattress terminology, how to choose a mattress,  find the best mattress, United States of America, Europe, mattress science, mattress education, mattress school, mattress info, learning service, select best mattress for you, back ache, lumbar pain, changig mattress, how to select the best mattress for me." /> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>
            How to Choose a Mattress
        </title>
       <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/head.php';?>
<script>
	$( function(){
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
                         <li class="breadcrumb-item"><a href="http://mattresszombie.com/MattressSchool/mattress_school.php/">Mattress School ></a></li>
                         <li class="breadcrumb-item">Mattress Glossary</li>
                     </ul>		
                </div>
           <!--TOP-->
            <a class="anchor" id="up"></a>
            
            <!--Share Buttom-->
           <div id="sharing">
                <a href='#social'><p>Share this article!</p><img src="/images/share_article_web.png"></a>
            </div>
            
      <div id="full-page-questions">
          <h1 class="questions-title">HOW TO CHOOSE A MATTRESS</h1>
          <p class="questions-paragraph">Answer the following questions, and see how your preferences and results are coming up. Remember to print your results and take them to your favorite mattress store.</p>
          
            <!--Chart-->
          <div id="mattressresults">
			
			<div class="mattresstype"></div>
			<div class="mattressscore">
				<div class="mattressscoretick" style="border-left: 1px solid #BBBBBB;">1</div>
				<div class="mattressscoretick">2</div>
				<div class="mattressscoretick">3</div>
				<div class="mattressscoretick">4</div>
				<div class="mattressscoretick">5</div>
				<div class="mattressscoretick">6</div>
				<div class="mattressscoretick">7</div>
				<div class="mattressscoretick">8</div>
				<div class="mattressscoretick">9</div>
				<div class="mattressscoretick">10</div>
			</div>
			<div style="clear: both;"></div>
			<div class="mattresstype">Firm</div><div id="firmscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Firm + Memory Foam</div><div id="firmfoamscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Plush</div><div id="plushscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Plush + Memory Foam</div><div id="plushfoamscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Soft</div><div id="softscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Soft + Memory Foam</div><div id="softfoamscore" class="mattressscore"></div><div style="clear: both;"></div>
			
		</div>
            
		<!--Print buttom-->
		<div style="text-align: center; margin: 30px;">
			<a href="javascript:printResults('mattressresults');">PRINT MY ANSWERS</a>
		</div>
                
                <!--QUESTIONS-->
                <section id="questions">
		
			<div class="mattressquestion">
                            	
                                <button class="mattress-question-title"><span id="question1"></span>QUESTION #1</button>
                            
                            <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; What is your preferred sleep position?</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>Because the position of your body will tell how deep your dreams are.<br><a href="http://www.mattresszombie.com/MattressArticles/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                <label><img src="/images/sleep_positions_back_web.jpg"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'firm');" />On my Back</label>
                                <label><img src="/images/sleep_positions_side_web.jpg"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'firmfoam');" />On my side</label>
                                <label><img src="/images/sleep_positions_stomach_web.jpg"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'plush,plushfoam');"" />On my stomach</label>
                                <label><img src="/images/sleep_positions_more_than_one_web.jpg"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'soft');" />More than One position</label>
                                </div>
                                 <br/>
                                <div class="prevnextbutton">
                                <button class="quest-button"><a href="#">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question2">Next Question &raquo;</a></button> 
                                </div>
                            </div>
                        </div>
		
			<div class="mattressquestion">
                                
                                <button class="mattress-question-title"><span id="question2"></span>QUESTION #2</button>
                            </div>
                            <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; What is your preferred sleep position?</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>Because the pain in your body will change the way you see the world.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
				<label><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'soft,firm');" />Soft, Firm</label><br />
				<label><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'plush,plushfoam');" />Plush, PlushFoam</label><br />
				<label><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'firmfoam');" />FirmFoam</label><br />
				<label><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'firm,softfoam');" />Firm, SoftFoam</label>
                                </div>
                            </div>
                            <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question1">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question3">Next Question &raquo;</a></button> 
                        </div>
                        </div>
		
			<div class="mattressquestion">
				<b>Question 3:</b><br /><br />
				<label><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'plush');" />Plush</label><br />
				<label><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'plushfoam');" />PlushFoam</label><br />
				<label><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'softfoam');" />SoftFoam</label><br />
				<label><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'firm,firmfoam');" />Firm, FirmFoam</label>
			</div>
		
			<div class="mattressquestion">
				<b>Question 4:</b><br /><br />
				<label><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'softfoam,firm');" />SoftFoam, Firm</label><br />
				<label><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'firm,plush');" />Firm, Plush</label><br />
				<label><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'plushfoam,soft');" />PlushFoam, Soft</label><br />
				<label><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'softfoam');" />SoftFoam</label>
			</div>
		
			<div class="mattressquestion">
				<b>Question 5:</b><br /><br />
				<label><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'firmfoam');" />FirmFoam</label><br />
				<label><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'firm');" />Firm</label><br />
				<label><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'plushfoam');" />PlushFoam</label><br />
				<label><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'plush,soft');" />Plush, Soft</label>
			</div>
                    
                        <!--Reset Function-->
		
			<div style="text-align: center;">
				<a href="javascript:resetQuestions();">Reset</a>
			</div><!--Print buttom-->
		<div class="print-reset">
			<a href="javascript:printResults('mattressresults');">PRINT MY ANSWERS</a>
		</div> 
                        
                        
			
		</section>
      </div> 
            
            <script>
                
			var mattresses = [
				{type: "firm", score: [0,0,0,0,0]},
				{type: "firmfoam", score: [0,0,0,0,0]},
				{type: "plush", score: [0,0,0,0,0]},
				{type: "plushfoam", score: [0,0,0,0,0]},
				{type: "soft", score: [0,0,0,0,0]},
				{type: "softfoam", score: [0,0,0,0,0]},
			];
			var mattresseslength = mattresses.length;
			
			function paintScore(mattress) {
				var totalscore = 0;
				for (var index = 0; index < mattress.score.length; index++) {
					totalscore += mattress.score[index];
				}
				var width = 30 * totalscore;
				var output = "<div class='mattressscorebar' style='width: " + width + "px;'></div>";
				var elementid = mattress.type + "score";
				document.getElementById(elementid).innerHTML = output;
			}
			
			function scoreMattress(question, mattresstypes) {
			
				// resert points for question before adding new points
				for (var index = 0; index < mattresseslength; index++) {
					if (mattresses[index].score[question] > 0) {
						mattresses[index].score[question]--;
					}
				}
				
				// break variable matresstypes into array
				var types = mattresstypes.split(",");
				
				// add point to corresponding types
				for (var index1 = 0; index1 < types.length; index1++) {
					for (var index2 = 0; index2 < mattresseslength; index2++) {
						if (mattresses[index2].type === types[index1]) {
							mattresses[index2].score[question]++;
							break;
						}
					}				
				}
				
				// paint current scores
				for (var index = 0; index < mattresseslength; index++) {
					paintScore(mattresses[index]);
				}
				
			}
			
			function resetQuestions() {
			
				// uncheck all options
				var options = document.getElementsByClassName("option");
				for (var index = 0; index < options.length; index++) {
					options[index].checked = false;
				}
				
				// resert all points
				for (var index1 = 0; index1 < mattresseslength; index1++) {
					for (var index2 = 0; index2 < mattresses[index1].score.length; index2++) {
						mattresses[index1].score[index2] = 0;
					}
					paintScore(mattresses[index1]);
				}
			
			}
                            
			resetQuestions();
                        
                        </script>
                        <script>
                            
                        function printResults('mattressresults') {
                            var restorepage = document.body.innerHTML;
                            var printresults =document.getElementById('mattressresults').innerHTML;
                            document.body.innerHTML = printresults;
                            window.print();
                            document.body.innerHTML = restorepage;
                        }
                            
                            </script>
                        <script>

                         //collapsible function
var acc = document.getElementsByClassName("mattress-question-title");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        
        var mattress-question-body = this.nextElementSibling;
        if (mattress-question-body.style.maxHeight){
           mattress-question-body.style.maxHeight = null;
        } else {
            mattress-question-body.style.maxHeight = mattress-question-body.scrollHeight + "px";
    } 
  }
}

            </script>        
            
            
            
            <!--SIDE BAR -->
          <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/side.php';?>
         
            <br>  
          
        </main>
        <footer>
             <?php include $_SERVER ['DOCUMENT_ROOT'].'/modules/footer.php';?>
        </footer>
    </body>
</html>