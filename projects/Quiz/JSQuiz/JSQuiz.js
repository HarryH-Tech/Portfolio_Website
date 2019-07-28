var counter = 90;
const quizContainer = document.getElementById('quiz');
const resultsContainer = document.getElementById('results');
const submitButton = document.getElementById('submit');


$("#next").click(function(){
   setInterval(function() {
     counter--;
      if (counter >= 1) {
         $('#Timer').text('Time: ' + counter + ' Seconds Remaining');
      }
      if (counter === 1) {
		 $('#Timer').text('0 seconds remaining');
		showResults();
         clearInterval(counter);
       }
     }, 1000);
	 $('#next').off('click');
});


const questions = [
	{
    question: "1) What is Javascript also known as?",
    answers: {
      a: "ECMAScript",
      b: "Javascroll",
      c: "Java",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
 	{
    question: "2) In which year was Javascript created?",
    answers: {
      a: "1991",
      b: "1997",
      c: "1995",
	  d: "1994"
    },
    correctAnswer: "c"
  },

	{
    question: "3) Can Javascript be used to style HTML elements?",
    answers: {
      a: "Yes",
      b: "No"
    },
    correctAnswer: "a"
  },
  
	{
    question: "4) Which one of these is a Javascript library?",
    answers: {
      a: "Java",
      b: "JGuess",
	  c: "JQuery",
	  d: "None of these"
    },
    correctAnswer: "c"
  },
  
	{
    question: "5) Which organisation developed Javascript?",
    answers: {
      a: "W3C",
      b: "Netscape Comunications",
      c: "Google",
	  d: "IEEE"
    },
    correctAnswer: "b"
  },
  
	{
    question: "6) 'The design of Javascript was influenced by Java' True\
	or False",
    answers: {
      a: "True",
      b: "False",
    },
    correctAnswer: "b"
  },
  
	{
    question: "7) Who wrote the original version of Javascript?",
    answers: {
      a: "Brendan Eich",
      b: "Linus Torvalds",
      c: "Bjarne Stroustrup",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
	{
    question: "8) Does Javascript allow for Object Orientated \
	Programming?",
    answers: {
      a: "Yes",
      b: "No"
    },
    correctAnswer: "a"
  },
  
	{
    question: "9) Which of these is a Javascript runtime that allows\
	 for server side programming?",
    answers: {
      a: "Edon.js",
      b: "Node.js",
      c: "Lodash.js",
	  d: "None of these"
    },
    correctAnswer: "b"
  },
  
	{
    question: "10) Which of these is a Javascript library?",
    answers: {
      a: "Lodash",
      b: "Bootstrap",
      c: "Tkinter",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
	{
    question: "11) Which of these could stop Javascript from loading properly on a webpage?",
    answers: {
      a: "Using a mobile device",
      b: "Using an old browser",
      c: "Having JavaScript disabled for security",
	  d: "All of the above",	 
    },
    correctAnswer: "d"
  },
  
	{
    question: "12) What does JSON stand for?",
    answers: {
      a: "Java Synthetic Orientated Number",
      b: "Javascript Object Notation",
      c: "Javascript Orientated Notes",
	  d: "None of these"
    },
    correctAnswer: "b"
  },
  
	{
    question: "13) What does AJAX stand for?",
    answers: {
      a: "Asynchronous Javascript and XML",
      b: "Awesome Javascript Anchor XML ",
      c: "Asynchronous Javascript and XHTML",
	  d: "None of these"
    },
    correctAnswer: "a"
  },
  
  {
    question: "14) Was Javascript invented before or after HTML",
    answers: {
      a: "Before",
      b: "After",
    },
    correctAnswer: "b"
  },
  
  {
    question: "15) Is Javascript more similar to Python or C++\
	in its syntax?",
    answers: {
      a: "C++",
      b: "Python",
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

      // store the list of answer choices
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
      answerContainers[questionNumber].style.color = 'green';
    }
    // if answer is wrong or blank
    else{
      // color the answers red
      answerContainers[questionNumber].style.color = 'red';
    }
	$('#submit').attr('disabled','disabled');
  });

  // show number of correct answers out of total
  
  if(numCorrect <= 5) {
	  message += 'Your final score was ' + counter * numCorrect + '<br> Good try but you should probably spend more time studying\
	Javascript before you begin studying more complicated programming concepts!'
  } else if(6 <= numCorrect <= 11) {
	  message += 'Your final score was ' + counter * numCorrect + '<br> Well done! You should be happy with that result,\
	  you can probably start stuyding more complicated areas of Javascript\
	  and front end programming now!';
  } else if(numCorrect >= 12) {
	message += 'Your final score was ' + counter * numCorrect + '<br> Wow that was great! You should learn some Javascript frameworks\
		and other web develeopment technologies!';
  }
  
  resultsContainer.innerHTML=numCorrect+' out of ' + questions.length;
  document.getElementById('infospace').innerHTML = message;
  counter = counter.toString;
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




