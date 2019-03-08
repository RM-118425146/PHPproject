<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

$totalValue = $_POST['txtTotal'];
$_session['txtName'] = $fullNameValue;
$_session['txtTotal'] = $totalValue2;

?>

<!doctype html>
<html>
    <head>
        <title>Murnane Cunsulting Services</title>
        <style>
        #Header {
          background-color: rgba(0, 150, 200, 0.3);
          font-family: "Verdana";
              }
        #Main {
          background-image: linear-gradient(white, gray);
            font-family: "Verdana";
              }
        body{
            font-family: "Verdana";
            outline: 4px solid black;
            margin: 0;
              }
        #txtName{
            background-color: white;
            font-family: "Verdana";
              }
        #txtNum{
            background-color: white;
            font-family: "Verdana";
              }
        #txtPassword{
            background-color: white;
            font-family: "Verdana";
              }
        #btnValidate{
            background-color:rgba(0, 100, 255, 0.5);
            font-family: "Verdana";
            font: bold
            border: none;
            padding: 15px 32px;
            margin: 4px 2px;
            cursor: pointer;
            border: 2px solid black;
            border-radius: 25px;
                }
        #btnContinue{
            background-color: rgba(0,255,0,0.3);
            font-family: "Verdana";
            font: bold
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
            <h1><b>Enter in your details below</b></h1>
            <hr />
          <center>
        </div>
        <div class="form" id="Main">
            <form name="Details" method="post" action="ebus3.php" >
                  <center>
                      <table cellspacing="10">
                          <tr>
                              <td>Name:</td>
                              <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                          </tr>
                          <tr>
                              <td>Phone Number:</td>
                              <td><input type="text" id="txtNum" name="txtNum" value="" required/></td>
                          </tr>
                          <tr>
                              <td>Password:</td>
                              <td><input type="password" id="txtPassword" name="txtPassword" value="" required/></td>
                          </tr>
                          <tr>
                              <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                          </tr>
                      </table>
                </center>
                <center>
                    <input type="button" name="btnValidate" id="btnValidate" onclick="Validate()" value="Validate"/>
                    <input type="submit" name ="btnContinue" id="btnContinue" onclick="ebus3.php" value="Continue" />
                </center>
            </div>
        </form>

        <script type="text/javascript">

            function Validate()
            {
              if (document.Details.txtName.value == "")
              {
                alert("Name must be filled out");
              }
              else if (document.Details.txtNum.value == "")
              {
                alert("Number must be filled out");
              }
              else if (document.Details.txtPassword.value == "")
              {
                alert("Password must be filled out");
              }
              else
              {
                alert("All fields filled in correctly")
              }
            }

        </script>
    </body>
</html>
