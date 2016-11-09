<!DOCTYPE html>

<head>

  <title>NBA Form</title>
  <link rel="stylesheet" type="text/css" href="css.css" />

<head>

  <h1>NBA Form</h1>

  <h2>Are you the best in nba knowledge?</h2>

  <body>

    <p>1 - Who won most NBA titles?</p>

    <select id="quest1">

      <option value="correct">Michael Jordan</option>
      <option value="2">Kareem Abdul-Jabbar</option>
      <option value="3">Lebron James</option>
      <option value="4">Kobe Bryant</option>

    </select>

    <p>2 - Who was the oldest player in the NBA league?</p>

    <select id="quest2">

      <option value="1">Shaquille O'Neal</option>
      <option value="2">Michael Jordan</option>
      <option value="correct">Clyde Drexler</option>
      <option value="4">Tim Duncan</option>

    </select>

    <p>3 - Who is nicknamed "His Airness"?</p>

    <select id="quest3">

      <option value="1">Lebron James</option>
      <option value="2">Pau Gasol</option>
      <option value="3">Kyrie Irving</option>
      <option value="correct">Michael Jordan</option>

    </select>

    <p>4 - Who was his Airness's favorite teammate?</p>

    <select id="quest4">

      <option value="1">Steve Kerr</option>
      <option value="correct">Scottie Pippen</option>
      <option value="3">Dennis Rodman</option>
      <option value="4">Toni Kukoc</option>

    </select>

    <p>5 - In what team play Tony Parker?</p>

    <select id="quest5">

      <option value="correct">San Antonio Spurs</option>
      <option value="2">Los Angeles Lakers</option>
      <option value="3">Miami Heat</option>
      <option value="4">Seattle Supersonics</option>

    </select>

    <p>6 - Who play now with Stephen Curry, Klay Thompson and others at Golden State ?</p>

    <select id="quest6">

      <option value="1">Derrick Rose</option>
      <option value="2">Rajon Rondo</option>
      <option value="correct">Kevin Durant (KD)</option>
      <option value="4">Dwayne Wade</option>

    </select>

    <br></br>

    <p>To send your score to the database, please enter you name and click on "Press"</p>

    <form id="quest" action="post">

      <input type="text" value="Enter your name" id="name" />

    </form>

    <br></br>

    <input id="send" type="button" value="Press" onclick="check()" />

    <input type="button" value="Retry" onclick="erase()" />

    <br></br>

    <div id="score"></div>

    <div id="result"></div>

    <input type="button" value="See Highscores" id="highScores" onclick="show()"/>

    <div id="tableauScore"></div>

    <hr>

  </body>

<script src="jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="javascript.js"></script>

<script>

  $('input:text').focus(
    function() {
      $(this).val('');
    });

  $("#send").click(function() {
    $("#quest").children('input').val('Enter your name');
  });

</script>
