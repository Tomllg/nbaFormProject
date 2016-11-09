function  erase() {

  document.getElementById("score").innerHTML = "";
  document.getElementById("result").innerHTML = "";

}

function  show() {

  var result = 10;

  $(function(){
      $.ajax({
        url: 'ajax2.php',
        type: 'POST',
        dataType: 'html',
        data: { score: result },
        success: function(msg) {
          console.log(msg);
          document.getElementById("tableauScore").innerHTML = msg;
        },
        error: function(resu, statut, erreur) {
          console.log(erreur);
        }
    });
  });

}

function  check() {

  var score = 0;

  if (quest1.value == "correct")
    score++;
  if (quest2.value == "correct")
    score++;
  if (quest3.value == "correct")
    score++;
  if (quest4.value == "correct")
    score++;
  if (quest5.value == "correct")
    score++;
  if (quest6.value == "correct")
    score++;
  document.getElementById("score").innerHTML = "You score " + score + "/6 !<br></br>";
  if (score < 3) {
    document.getElementById("result").innerHTML = "And you say that you know basketball ... Pfff ;)!";
  } else if (score == 3 || score == 4) {
    document.getElementById("result").innerHTML = "Humm, that's okay for this time, but ... !";
  } else if (score > 4 && score <= 5) {
    document.getElementById("result").innerHTML = "You progress, one more and you have my absolute respect !";
  } else if (score == 6) {
    document.getElementById("result").innerHTML = "You're the best man, come in my team !"
  }

  var name = document.getElementById("name").value;

  $.ajax({
    url: 'ajax.php',
    type: 'POST',
    dataType: 'html',
    data: { idEmploye: name, result: score},
    success: function(msg){
      console.log(msg);
    },
    error: function(resu, statut, erreur) {
      console.log(erreur);
      }
  });
}
