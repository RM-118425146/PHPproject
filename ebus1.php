<?php
session_start();
$totalValue = "";
$_Session['txtTotal'] = $totalValue;
?>
<!Doctype html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Murnane Cunsulting Services</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
        #Header {
          background-color: rgba(0, 150, 200, 0.3);
          font-family: "Verdana";
              }
        #Main {
          background-image: linear-gradient(white, gray);
              }
        #btnProceed{
          background-color:rgba(0,255,0,0.3);
          font-family: "Verdana";
          border: none;
          padding: 15px 32px;
          margin: 4px 2px;
          cursor: pointer;
          border: 2px solid black;
          border-radius: 25px;
              }
        #btnCalc{
          background-color:rgba(255,255,0,0.5);
          font-family: "Verdana";
          border: none;
          padding: 15px 32px;
          margin: 4px 2px;
          cursor: pointer;
          border: 2px solid black;
          border-radius: 25px;
              }
        #btnClear{
          background-color: white;
          color: red;
          font-family: "Verdana";
          border: none;
          padding: 15px 32px;
          margin: 4px 2px;
          cursor: pointer;
          border: 2px solid black;
          border-radius: 25px;
              }
        body{
          font-family: "Verdana";
          outline: 4px solid black;
          margin: 0;
              }
        #txtSubTot{
                background-color: Transparent;
                font-family: "Verdana";
              }
        #txtDisc{
                background-color: Transparent;
                font-family: "Verdana";
              }
        #txtVat{
                background-color: Transparent;
                font-family: "Verdana";
              }
        #txtTotal{
                background-color: Transparent;
                font-family: "Verdana";
              }
        </style>
    </head>
    <body>
        <div id="Header">
            <h1>Murnane Cunsulting Services</h1>
            <hr />
        </div>
        <div class ="form" id="Main">
            <form name="intCalc" method="post" action="ebus2.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Select a Consulting Service</b></td>
                        </tr>
                        <tr>
                            <td>Blockchain</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things(Robots)</td>
                            <td><input type="radio" id="Autonomous_Things" name="rdoGroup" value="2000" /></td>
                        </tr>
                        <tr>
                            <td>Immersive Experience</td>
                            <td><input type="radio" id="Immersive_Experience" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
            <br />

                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><B>Amount</b></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td>-Discount @10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>+VAT @20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                    </table>
                </center>

            <br />
            <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="ebus2.php" value="Add to Shopping Cart"/>
            </form>
        </div>
        <script type="text/javascript">
            function calcSub()
            {
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomous_Things = parseFloat(document.getElementById('Autonomous_Things').value);
                var Immersive_Experience = parseFloat(document.getElementById('Immersive_Experience').value);

                if (document.getElementById('Blockchain').checked)
                {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calcDisVatTotal(subAmount);
                }
                else if (document.getElementById('Autonomous_Things').checked)
                {
                    document.intCalc.txtSubTot.value = Autonomous_Things;
                    subAmount = Autonomous_Things;
                    calcDisVatTotal(subAmount);
                }
                else if (document.getElementById('Immersive_Experience').checked)
                {
                    document.intCalc.txtSubTot.value = Immersive_Experience;
                    subAmount = Immersive_Experience;
                    calcDisVatTotal(subAmount);
                }
            }

            function calcDisVatTotal(parmSubTotal)
            {
                var subTotal = parseFloat(parmSubTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);

                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            function AmountClear()
            {
                document.getElementById("txtSubTot").value = " ";
                document.getElementById("txtDisc").value = " ";
                document.getElementById("txtVat").value = " ";
                document.getElementById("txtTotal").value = " ";
            }
        </script>
    </body>
</html>
