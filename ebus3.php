<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Murnane Cunsulting Services</title>
        <style>
        #Header{
          background-color: rgba(0, 150, 200, 0.3);
          font-family: "Verdana";
        }
        #main {
          background-image: linear-gradient(white, gray);
          font-family: "Verdana";
        }
        body{
          font-family: "Verdana";
          outline: 4px solid black;
          margin: 0;
        }
        #home{
          background-color:rgba(0,255,0,0.3);
          font-family: "Verdana";
          border: none;
          padding: 15px 32px;
          margin: 4px 2px;
          cursor: pointer;
          border: 2px solid black;
          border-radius: 25px;
        }
        </style>
    </head>
    <body>
      <div id="Header">
        <center>
          <h1><b>Thank You For Shopping With</b></h1>
          <hr />
        <center>
      </div>
      <div id=main>
        <center>
          <br></br>
        <?php
        $totalvalue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "Customer Name: ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total cost is: ".$totalvalue2.".";
        ?>
        <br></br>
        <form name="home" action="index.php">
          <input type="Submit"id="home" Value="Return To Home">
        </form>
        <br></br>
        </center>
      </div>
    </body>
</html>
