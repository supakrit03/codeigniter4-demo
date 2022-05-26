$(document).ready(function () {
  let counter = 0;

  $("#counter").text(counter);

  $("#counter-btn").click(function (e) {
    counter += 1;
    $("#counter").text(counter);
  });
});
