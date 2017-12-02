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
<style>
button.accordion {
    background-color: #990000;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: 1px solid #fff;
    text-align: left;
    outline: none;
    font-size: 15px;
    font-weight: bold;
    letter-spacing: 2px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #691717;
}

button.accordion:after {
    content: '\002B';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
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
                         <li class="breadcrumb-item">How to Choose Your Perfect Mattress</li>
                     </ul>		
                </div>
           <!--TOP-->
            <a class="anchor" id="up"></a>
            
            <!--Share Buttom-->
           <div id="sharing">
                <a href='#social'><p>Share this article!</p><img src="/images/share_article_web.png"></a>
            </div>
            
      <div id="full-page-questions">
          <h1 class="questions-title">HOW TO CHOOSE YOUR MATTRESS</h1>
          <p class="questions-paragraph">Answer the following questions, and see how your preferences and results are coming up. Remember to print your results and take them to your favorite mattress store.</p>
          
            <!--Chart-->
          <div class="mattressresults">
			
			<div class="mattresstype"></div>
			<div class="mattressscore">
				<div class="mattressscoretick" style="border-left: 1px solid #BBBBBB;">1</div>
				<div class="mattressscoretick">2</div>
				<div class="mattressscoretick">3</div>
				<div class="mattressscoretick">4</div>
				<div class="mattressscoretick">5</div>
				<div class="mattressscoretick">6</div>
				<div class="mattressscoretick">7</div>
			</div>
			<div style="clear: both;"></div>
			<div class="mattresstype">Extra Soft</div><div id="extrasoftscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Soft</div><div id="softscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Medium Soft</div><div id="mediumsoftscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Medium</div><div id="mediumscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Medium Firm</div><div id="mediumfirmscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Firm</div><div id="firmscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Extra Firm</div><div id="extrafirmscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Add Memory Foam</div><div id="memoryfoamscore" class="mattressscore"></div><div style="clear: both;"></div>
			<div class="mattresstype">Add Memory Foam With Gel</div><div id="memoryfoamgelscore" class="mattressscore"></div><div style="clear: both;"></div>
			
	</div>
            
		<!--Print buttom-->
		<div style="text-align: center; margin: 30px; display: block; padding: 10px; background-color: green; color: #fff;">
			<a href="javascript:printResults();">Print</a>
		</div>
                <!--prueba-->
                
                <button class="accordion"><span id="question1"></span>QUESTION #1</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                            <div class="mattress-question-text">
                               <p>&#8594; What is your preferred sleep position?</p>
                            </div>
                            <div class="mattress-question-why">
                                 <h4><b>Why we ask this?</b></h4>
                                <p>Because the position of your body will tell how deep your dreams are.<br><a href="http://www.mattresszombie.com/MattressArticles/Sleep-facts.php" target="_blank">Read Article</a></p>        
                            </div>
                            <div class="mattress-question-choices">
                                <label><img src="/images/sleep_positions_back_web.jpg" alt="back sleep position"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'mediumfirm');" />On my Back</label>
                                <label><img src="/images/sleep_positions_side_web.jpg" alt="on the side sleep position"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'soft, memoryfoam');" />On my side</label>
                                <label><img src="/images/sleep_positions_stomach_web.jpg" alt="on stomach sleep position"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'firm');" />On my stomach</label>
                                <label><img src="/images/sleep_positions_more_than_one_web.jpg" alt="more than one sleep position"><br/><br/><input type="radio" name="question1" class="option" onchange="scoreMattress(0, 'medium');" />More than One position</label>
                            </div>
                                 <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question2">Next Question &raquo;</a></button> 
                            </div>
                        </div>
                     </div>

                <button class="accordion"><span id="question2"></span>QUESTION #2</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; Which of the following conditions apply to you?</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>Pain is one of the main reasons why you have a poor sleep. Choosing the right mattress, could solve most of the problem.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/sleep_pain_back_web.png" alt="back pain"><br/><br/><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'mediumfirm');" />Back Pain</label>
                                    <label><img src="/images/sleep_pain_joints_web.png" alt="joints pain"><br/><br/><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'soft, memoryfoamgel, memoryfoam');" />Joint(s) Pain</label>
                                    <label><img src="/images/sleep_pain_nerve_web.png" alt="nerve pain"><br/><br/><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'extrasoft, memoryfoamgel');" />Nerve Pain</label>
                                    <label><img src="/images/sleep_pain_no_pain_web.png" alt="no pain"><br/><br/><input type="radio" name="question2" class="option" onchange="scoreMattress(1, 'medium, mediumfirm, memoryfoam');" />No Pain at All</label>
                                </div>
                                <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question1">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question3">Next Question &raquo;</a></button> 
                            </div>
                        </div>
                    </div>

                <button class="accordion"><span id="question3"></span>QUESTION #3</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; How old are you?</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>As we age, muscle mass decreases & bones become brittle. Your mattress should be a support for your body.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/sleep_pain_back_web.png" alt="back pain"><br/><br/><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'medium, mediumfirm, memoryfoam');" />Under 30 yr. old?</label>
                                    <label><img src="/images/sleep_pain_joints_web.png" alt="joints pain"><br/><br/><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'medium, mediumfirm, memoryfoam');" />31-50 yr. old?</label>
                                    <label><img src="/images/sleep_pain_nerve_web.png" alt="nerve pain"><br/><br/><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'mediumsoft, memoryfoamgel');" />51-70 yr. old?</label>
                                    <label><img src="/images/sleep_pain_no_pain_web.png" alt="no pain"><br/><br/><input type="radio" name="question3" class="option" onchange="scoreMattress(2, 'soft, memoryfoamgel');" />71 yr. old or more?</label>
                                </div>
                                <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question2">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question4">Next Question &raquo;</a></button> 
                            </div>
                        </div>
                    </div>
                
                    <button class="accordion"><span id="question4"></span>QUESTION #4</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; When you sleep, are you....</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>If our body temperature is not comfortable, our REM stage is disrupted and we will feel tired.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/sleep_pain_back_web.png" alt="back pain"><br/><br/><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'memoryfoamgel, medium, mediumfirm, firm');" />Hot?</label>
                                    <label><img src="/images/sleep_pain_joints_web.png" alt="joints pain"><br/><br/><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'soft, mediumsoft, medium, mediumfirm, memoryfoam');" />Cold?</label>
                                    <label><img src="/images/sleep_pain_nerve_web.png" alt="nerve pain"><br/><br/><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'soft, mediumsoft, medium, mediumfirm, firm, memoryfoam');" />Normal?</label>
                                    <label><img src="/images/sleep_pain_no_pain_web.png" alt="no pain"><br/><br/><input type="radio" name="question4" class="option" onchange="scoreMattress(3, 'memoryfoamgel,mediumsoft, medium, mediumfirm, firm');" />Fluctuate?</label>
                                </div>
                                <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question3">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question5">Next Question &raquo;</a></button> 
                            </div>
                        </div>
                    </div>
                    
                    <button class="accordion"><span id="question5"></span>QUESTION #5</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; How much do you weight?</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>Our body's weight will determine the type of mattress will support us best.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/100_Web.png" alt="less than 100 pounds"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'soft,extrasoft,mediumsoft');" />Under 100 lb.?</label>
                                    <label><img src="/images/200_web.png" alt="200 pounds"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'mediumsoft, medium');" />Between 100 and 200 lb?</label>
                                    <label><img src="/images/300_web.png" alt="300 pounds"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'mediumfirm, firm');" />Between 200 and 300 lb?</label>
                                    <label><img src="/images/300+_web.png" alt="more than 300 pounds"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(4, 'extrafirm');" />More than 300 lb?</label>
                                </div>
                                <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question4">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question6">Next Question &raquo;</a></button> 
                            </div>
                        </div>
                    </div>
                
                    <button class="accordion"><span id="question6"></span>QUESTION #6</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; Choose your own comfort preference on the scale of 1-8, where 1 is the softest and 8 is the most firm:</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>Our body's weight will determine the type of mattress will support us best.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/sleep_pain_back_web.png" alt="back pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'extrasoft');" />1</label>
                                    <label><img src="/images/sleep_pain_joints_web.png" alt="joints pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'soft');" />2</label>
                                    <label><img src="/images/sleep_pain_nerve_web.png" alt="nerve pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'mediumsoft');" />3</label>
                                    <label><img src="/images/sleep_pain_no_pain_web.png" alt="no pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'medium');" />4</label>
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/sleep_pain_back_web.png" alt="back pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'mediumfirm');" />5</label>
                                    <label><img src="/images/sleep_pain_joints_web.png" alt="joints pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'firm');" />6</label>
                                    <label><img src="/images/sleep_pain_nerve_web.png" alt="nerve pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'extrafirm');" />7</label>
                                    <label><img src="/images/sleep_pain_no_pain_web.png" alt="no pain"><br/><br/><input type="radio" name="question6" class="option" onchange="scoreMattress(5, 'memoryfoam');" />8</label>
                                </div>
                                <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question5">&laquo; Previous Question</a></button>
                                <button class="quest-button"><a href="#question7">Next Question &raquo;</a></button> 
                            </div>
                        </div>
                    </div>
                
                    <button class="accordion"><span id="question5"></span>QUESTION #7</button>
                    <div class="panel">
                        <div class="mattress-question-body">
                                <div class="mattress-question-text">
                                    <p>&#8594; Do you have a sleeping partner?</p>
                                </div>
                                <div class="mattress-question-why">
                                    <h4><b>Why we ask this?</b></h4>
                                    <p>Having a sleeping partner could determine a different choice. If your partner has a totally different mattress preference you should consider two mattress with an adjustable base for each.<br><a href="https://www.mattresszombie.com/MattressArticle/Sleep-facts.php" target="_blank">Read Article</a></p>        
                                </div>
                                <div class="mattress-question-choices">
                                    <label><img src="/images/sleep_pain_back_web.png" alt="back pain"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(6, 'mediumsoft, medium, mediumfirm, firm');" />Yes</label>
                                    <label><img src="/images/sleep_pain_joints_web.png" alt="joints pain"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(6, 'mediumsoft, medium, mediumfirm, firm, memoryfoam, memoryfoamgel');" />Sometimes</label>
                                    <label><img src="/images/sleep_pain_nerve_web.png" alt="nerve pain"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(6, 'mediumsoft, medium, mediumfirm, firm, memoryfoam, memoryfoamgel');" />Occasionally</label>
                                    <label><img src="/images/sleep_pain_no_pain_web.png" alt="no pain"><br/><br/><input type="radio" name="question5" class="option" onchange="scoreMattress(6, 'mediumsoft, medium, mediumfirm, firm, extrafirm, memoryfoam, memoryfoamgel');" />Never</label>
                                </div>
                                <br/>
                            <div class="prevnextbutton">
                                <button class="quest-button"><a href="#question6">&laquo; Previous Question</a></button>
                            </div>
                        </div>
                    </div>
                
                
                        <!--Reset Function-->
		
			<div style="text-align: center;">
				<a href="javascript:resetQuestions();">Reset</a>
			</div>
			
		</section>
      </div> 
            
            <script>
                
			var mattresses = [
				{type: "extrasoft", score: [0,0,0,0,0]},
				{type: "soft", score: [0,0,0,0,0]},
				{type: "mediumsoft", score: [0,0,0,0,0]},
				{type: "medium", score: [0,0,0,0,0]},
                                {type: "mediumfirm", score: [0,0,0,0,0]},
                                {type: "firm", score: [0,0,0,0,0]},
                                {type: "extrafirm", score: [0,0,0,0,0]},
				{type: "memoryfoam", score: [0,0,0,0,0]},
				{type: "memoryfoamgel", score: [0,0,0,0,0]},
			];
			var mattresseslength = mattresses.length;
			
			function paintScore(mattress) {
				var totalscore = 0;
				for (var index = 0; index < mattress.score.length; index++) {
					totalscore += mattress.score[index];
				}
				var width = 60 * totalscore;
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
			
			function printResults() {
				document.getElementById("mattressresults").style.display = "none";
				window.print();
				document.getElementById("mattressresults").style.display = "block";
			}
			
			resetQuestions();
                        
                        </script>
                        
                        <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
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