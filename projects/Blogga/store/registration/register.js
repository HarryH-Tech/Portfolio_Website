//Password strength text and show password function
const strength = {
  0: "Very Bad",
  1: "Bad",
  2: "Average",
  3: "Good",
  4: "Very Good"
}

const password = document.getElementById('password');
const text = document.getElementById('password-strength-text');

password.addEventListener('input', function() {
  var val = password.value;
  var result = zxcvbn(val);

  // Update the text indicator
  if (val !== "") {
    text.innerHTML = "Strength: " + strength[result.score]; 
  } else {
    text.innerHTML = "";
  }
});