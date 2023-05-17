<!DOCTYPE html>
<html>
<head>
  <title>Automata</title>
  <style>
    h1, br {
        color: blue;
        text-align:center;
        font-family: 'Times New Roman'

    }
    h3, {
        color: red;
        text-align:center;
        font-family: 'Times New Roman'
    
    }
    body {
        color: red;
        text-align:center;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;

    }
    form {
        color: black;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    button {}
  </style>
</head>
<body>
<h1>AUTOMATA</h1>
<h3>Cessi Rumondor</h3>
<h3>211011060010</h3>
<h3>Mod 3</h3>
<h3>Class A</h3>
<h3>NFA for b (a + b) b*</h3>
<input type="image" src="http://infimux.com/automata/assignments/mid3.jpg" alt="Submit" width="150" height="100">
  <form method="POST">
    <label for="inputString">Enter a word:</label>
    <input type="text" name="inputString">
    <button type="submit">Check</button>
  </form>
  <?php
    function isAccepted($input) {
      if (preg_match('/^b(a|b)b*$/', $input)) {
        return true;
      } else {
        return false;
      }
    }

    if (isset($_POST['inputString'])) {
      $inputString = $_POST['inputString'];
      if (isAccepted($inputString)) {
        echo "$inputString is accepted";
      } else {
        echo "$inputString is not accepted";
      }
    }
  ?>
</body>
</html>
