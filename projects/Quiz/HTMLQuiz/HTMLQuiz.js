

var counter = 3;
const quizContainer = document.getElementById('quiz');
const resultsContainer = document.getElementById('results');
const submitButton = document.getElementById('submit');


$("#next").click(function(){
   setInterval(function() {
     counter--;
      if (counter >= 0) {
         $('#Timer').text('Time: ' + counter + ' Seconds Remaining');
      }
      if (counter === 0) {
		 $('#Timer').text('0 seconds remaining');
         clearInterval(counter);
		 showResults();
       }
     }, 1000);
	 $('#next').off('click');
});



const questions = [
	{
    question: "1) Which of the following does HTML stand for?",
    answers: {
      a: "Hyper Technological Marvelous Learning",
      b: "Hyper Text Markup Language",
      c: "Heuristic Teaching Machine Learning",
	  d: "None of these"
	    },
    correctAnswer: "a"
    },
  
 	{
    question: "2) What is the <a> tag used for in HTML?",
    answers: {
      a: "To begin a new line",
      b: "As a way to align HTML elements",
      c: "To create a hyperlink",
	  d: "None of these"
    },
    correctAnswer: "c"
  },

	{
    question: "3) In which year was HTML first released",
    answers: {
      a: "1990",
      b: "1989",
      c: "1994",
	  d: "None of these, it was 1993"
    },
    correctAnswer: "d"
  },
  
	{
    question: "4) Who initially proposed the idea of HTML?",
    answers: {
      a: "Tim Berners Lee",
      b: "Larry Page",
	  c: "Marc Andressen",
	  d: "Homer Simpson"
    },
    correctAnswer: "a"
  },
  
	{
    question: "5) Which organisation maintains HTML specifications?",
    answers: {
      a: "W3C (World Wide Web Consortium)",
      b: "Google",
      c: "IEEE",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
	{
    question: "6)What is the newest version of HTML?",
    answers: {
      a: "HTML 4",
      b: "HTML 6",
	  c: "HTML 5",
	  d: "HTML 4.329"
    },
    correctAnswer: "a"
  },
  
	{
    question: "7) Which protocol is used to transmit HTML documents\
	from the server to the user browser?",
    answers: {
      a: "HTTP (Hypertext Transfer Protocol",
      b: "TCP (Transmission Control Protocol)",
      c: "FTP (File Transfer Protocol)",
	  d: "None of these"
    },
    correctAnswer: ""
  },
  
	{
    question: "8) Which 2 of the following HTML elements are used to draw\
	content ot the page?",
    answers: {
      a: "p and li",
	  b: "a and input",
      c: "SVG and canvas",
	  d: "None of these"
    },
    correctAnswer: "c"
  },
  
	{
    question: "9) ",
    answers: {
      a: "Hexadecimal, RGBA values and the name of the color",
      b: "1996",
      c: "Its a trick question! There are only 2 ways to select a color in CSS",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
	{
    question: "10) What is the '#' tag used for in CSS?",
    answers: {
      a: "To select a class of elements.",
      b: "To select an element id.",
      c: "To represent a number.",
	  d: "None of these"
    },
    correctAnswer: "b"
  },
  
	{
    question: "11) What was the first browser to have full\
			  CSS 1 support?",
    answers: {
      a: "Mosaic",
      b: "Opera",
      c: "Chrome",
	  d: "None of these, it was Internet Explorer"
    },
    correctAnswer: "d"
  },
  
	{
    question: "12) What is the newest level of CSS release?",
    answers: {
      a: "1",
      b: "3",
      c: "2",
	  d: "None of these"
    },
    correctAnswer: "b"
  },
  
	{
    question: "13) Which of these is not a CSS framework?",
    answers: {
      a: "Foundation",
      b: "Bootstrap",
      c: "Unchained",
	  d: "Its a trick question, all of the above are CSS frameworks"
    },
    correctAnswer: "c"
  },
  
  {
    question: "14) Which of the following 3 programming languages \
				   is least often used with CSS?",
    answers: {
      a: "Javascript",
      b: "PHP",
      c: "Java",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
  {
    question: "15) Can CSS be used ot create mobile applications?",
    answers: {
      a: "Yes",
      b: "No",
	  c: "Maybe"
    },
    correctAnswer: "a"
  }
  
  
  ];

function buildQuiz(){
  // we'll need a place to store the HTML output
  const output = [];

  // for each question...
  questions.forEach(
    (currentQuestion, questionNumber) => {

      // we'll want to store the list of answer choices
      const answers = [];

      // and for each available answer...
      for(letter in currentQuestion.answers){

        // ...add an HTML radio button
        answers.push(
          `<label>
		  
            <input type="radio" name="question${questionNumber}" value="${letter}">
            ${letter} :
            ${currentQuestion.answers[letter]}
          </label>
		  <br>`
        );
      }

      // add this question and its answers to the output
output.push(
  `<div class="slide">
    <div class="question"> ${currentQuestion.question} </div>
    <div class="answers"> ${answers.join("")} </div>
  </div>`
);
    }
  );

  // finally combine our output list into one string of HTML and put it on the page
  quizContainer.innerHTML = output.join('');
}
				
				
			// display quiz right away
buildQuiz();	
				
				
				
const previousButton = document.getElementById("previous");
const nextButton = document.getElementById("next");
const slides = document.querySelectorAll(".slide");
let currentSlide = 0;	
let message = '';
				
				
				
				
				
function showResults(){
	 // gather answer containers from our quiz
  const answerContainers = quizContainer.querySelectorAll('.answers');

  // keep track of user's answers
  let numCorrect = 0;

  // for each question...
  questions.forEach( (currentQuestion, questionNumber) => {

    // find selected answer
    const answerContainer = answerContainers[questionNumber];
    const selector = 'input[name=question'+questionNumber+']:checked';
    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

    // if answer is correct
    if(userAnswer===currentQuestion.correctAnswer){
      // add to the number of correct answers
      numCorrect++;

      // color the answers green
      answerContainers[questionNumber].style.color = 'lightgreen';
    }
    // if answer is wrong or blank
    else{
      // color the answers red
      answerContainers[questionNumber].style.color = 'red';
    }
	$('#submit').attr('disabled','disabled');
	$('#next').attr('disabled','disabled');
	$('#previous').attr('disabled','disabled');

  });

  // show number of correct answers out of total
  
  if(numCorrect <= 5) {
	  message += 'Your final score was ' + counter * numCorrect + '<br> Good try but you should probably spend more time studying\
	CSS before you begin studying more complictaed design concepts!'
  } else if(6 <= numCorrect <= 11) {
	  message += 'Your final score was ' + counter * numCorrect + '<br> Well done! You should be happy with that result,\
	  you can probably start stuyding more compliacted areas of CSS\
	  and UI design now!';
  } else if(numCorrect >= 12) {
	message += 'Your final score was ' + counter * numCorrect + '<br> Wow that was great! You should learn some CSS frameworks\
				and other web develeopment technologies!';
  }
  
  resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length + '<br>';
  counter = counter.toString;
    document.getElementById('infospace').innerHTML = message;

 $('#submit').off('click');


 }

let percentComplete = 7;

function showNextSlide() {
	
  showSlide(currentSlide + 1);
  $('.progress-bar').width(percentComplete + '%');
  percentComplete += 7
  
  if(percentComplete > 98) {
		$('.progress-bar').width('100%');
  }
  }

function showPreviousSlide() {
  showSlide(currentSlide - 1);
  percentComplete -= 7
  $('.progress-bar').width(percentComplete + '%');
  if(percentComplete === 7) {
		$('.progress-bar').width('0%');
  }
  
}

function showSlide(n) {
  slides[currentSlide].classList.remove('active-slide');
  slides[n].classList.add('active-slide');
  currentSlide = n;
  if(currentSlide===0){
    previousButton.style.display = 'none';
  }
  else{
    previousButton.style.display = 'inline-block';
  }
  if(currentSlide===slides.length-1){
    nextButton.style.display = 'none';
    submitButton.style.display = 'inline-block';
  }
  else{
    nextButton.style.display = 'inline-block';
    submitButton.style.display = 'none';
  }
}
showSlide(0);



previousButton.addEventListener("click", showPreviousSlide);
nextButton.addEventListener("click", showNextSlide);




// on submit, show results
submitButton.addEventListener('click', showResults);




