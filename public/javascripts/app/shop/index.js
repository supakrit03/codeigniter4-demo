window.$(document).ready(function () {
  let counter = 0;

  setCounter();

  $("#counter-btn").click(function (e) {
    counter += 1;
    setCounter();
  });

  function setCounter() {
    $("#counter").text(counter);
  }
});
