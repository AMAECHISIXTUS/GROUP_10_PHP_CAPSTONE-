<!DOCTYPE html>
     <html> 
     <head> 
  <title>Capstone Project Group 10</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
  
      <?php

      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#4A0404></td>";
          }
          }
          echo "</tr>";
    }

        ?>
  </table>
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