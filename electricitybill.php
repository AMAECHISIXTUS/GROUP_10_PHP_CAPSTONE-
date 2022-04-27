<?php
$error=''; $success='';
  if (isset($_POST['submit'])){
    $units = $_REQUEST['unit'];
    function calculate_bill($units){
      if($units <= 50){
         $total_cost = $units * 3.50;
      }
      elseif($units > 50 and $units <= 150){
         $cost = 50 * 3.50;
         $rem_cost = ($units - 50) * 4.00;
         $total_cost = $cost + $rem_cost;
      }
      elseif($units > 150 and $units <= 250){
         $cost = (50 * 3.50) + (100 *4.00);
         $rem_cost = ($units - 150) * 5.20;
         $total_cost = $cost + $rem_cost;
      }
      else{
         $cost = (50 * 3.50) + (100 *4.00) + (100 * 5.20);
         $rem_cost = ($units - 250) * 6.50;
         $total_cost = $cost + $rem_cost;
      }
      return  number_format($total_cost, 2);
   } 
   if($units < 0){
    $error = '<span style="color: red;
    font-size: 17px;
    font-weight: 600;">Please enter valid units <span>';
 }
 else{
  $success =  '<span style="color: blue;
  font-size: 17px;
  font-weight: 600;">Electricity bill is NGN '. calculate_bill($units).'</span>';
}
  }
   
   
   ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
    if(window.history.replaceState) {
      windo.history.replaceState(null,null,window.location.href);
    }
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ELECTRICITY BILL</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background-color: aliceblue;
      }
      .container {
        margin: 0 auto;
        text-align: center;
      }
      form.form-container {
        margin: 0 auto;
        background-color: antiquewhite;
        width: 50%;
        padding-top: 20px;
        padding-bottom: 20px;
        border-radius: 15px;
      }
      .input-group {
        width: 100%;
        margin-bottom: 25px;
      }
      label {
        font-weight: 700;
        width: 30%;
      }
      .form-text {
        width: 70%;
        padding: 10px;
        border-radius: 12px;
        border: 1px solid #fff;
      }
      .form-text::placeholder {
        font-size: 14px;
        color: grey;
      }
      .btn-submit {
        width: 90%;
        padding: 12px;
        border-radius: 12px;
        background-color: cyan;
        font-size: 20px;
        font-weight: 900;
      }
      @media screen and (max-width: 763px) {
        form.form-container {
          width: 100%;
        }
        h1 {
          font-size: 20px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>ELECTRICITY BILL CALCULATOR</h1>
      <form action="" method="post" class="form-container">
        <div class="input-group">
          <label for="unit">UNITS:</label>
          <input
            type="text"
            name="unit"
            id="unit"
            class="form-text"
            placeholder="Enter Unit"
          />
        </div>
        <div class="input-group">
          <p>
            <?php
            echo $error;
            echo $success;

            ?>
          </p>
        </div>
        <div class="input-group">
          <input
            type="submit"
            value="CALCULATE"
            class="btn-submit"
            id="submit"
            name="submit"
          />
        </div>
      </form>
    </div>

    <br>
      <table>
            <tr>
                  <th>Name</th>
                  <th>Intern ID</th>
            </tr>
            <tr>
                  <td>Amaechi Sixtus Chimezie</td>
                  <td>SH-IT-0080165</td>

            </tr>
            <tr>
                  <td>Madueke Joseph Chukwuezugo</td>
                  <td>SH-IT-0149570</td>

            </tr>
            <tr>
                  <td>Abdussalam Hameedat</td>
                  <td>SH-IT-0088524</td>

            </tr>
            <tr>
                  <td>Nwadirioha David</td>
                  <td>SH-IT-0018159</td>

            </tr>
            <tr>
                  <td>Udosen, Iboro</td>
                  <td>SH-IT-0093471</td>

            </tr>
      </table>
  </body>
</html>
