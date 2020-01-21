let buttonUp = document.getElementById('buttonUp');
let buttonDown = document.getElementById('buttonDown');

buttonUp.addEventListener('click', steponUp);
buttonDown.addEventListener('click', steponDown);

// up number of age
function steponUp() {
  let input = document.getElementById('age');
  let val = document.getElementById('buttonUp').value;
  input.stepUp(3);
}

// down number of age
function steponDown() {
  let input = document.getElementById('age');
  let val = document.getElementById('buttonDown').value;
  input.stepDown(1);
}