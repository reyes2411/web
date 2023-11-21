<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <style>
        body {
            background-image: url('yy.png'), url('R.png');
            background-size: 30%;
            background-repeat: no-repeat, no-repeat;
            background-position-x: 0%, 100%;
            background-position-y: 70%, 70%;
            margin: 0; 
            padding: 0;
        }

        .right-aligned-img {
            float: right;
            margin-left: 150;
        }
       
    </style>

    </head>
    <body bgcolor="#f0f0f0">
        <table>
            <tr> 
                <td> </td>
                <td> </td>
                <td> <img src="UJAT.png"width="350" height="100">  </td>
                <td> </td>
                <td> </td>

                <td>  <h1><center><i>UNIVERDAD JUAREZ AUTONOMA DE TABASCO</i></center></h1> 
                    <h3><center> “ESTUDIO EN LA DUDA.  ACCIÓN EN LA FE”</center></h3>
                 <h2><center><i> DIVISIÓN ACADÉMICA MULTIDISCIPLINARIA DE LOS RÍOS</i></center></h2></td>
                   
                               

                <td> <img src="Damr.png"width="120" height="120" class="right-aligned-img">  </td>
                </tr>
         </table>
            
            <h1><center>BIENVENIDO</center></h1>
            <h1><center>A</center></h1>
         <h1><center>"MUNDO MATEMATICO"</center></h1>

         <h2><center> Esta es la sucesion que has seleccionado</center></h2>
         <center>
             <form method="post" action="Practica6.php">
                <table border cellpadding=5 cellspacing=1>
                   <tr>
                         <td bgcolor="gray"> ¿Cuantas veces desea ejecutar la sucesion? </td>
                        <td bgcolor="black"> <input type="text" name="Resp" /> </td>
                        <td bgcolor="red"> <input type="submit" value="Continuar" /> </td>
                   </tr>
                   
               </table>
           </form>
       </center>
                  
        <?php
        $Resp = isset($_POST['Resp']) ? $_POST['Resp'] : 0;
           //Formula; an = n / n+2
    // sucesion a imprimir; 1/3, 1/2, 3/5, 2/3, 5/7...
        echo '<h2><center><i> Resultado </i></center></h2>';

        $i=1;
        $n=$Resp;
        echo'<center>';
        e echo '<table border cellpadding=15 cellspacing=5 bgcolor="coffe" >';
        echo '<tr>';
        
        while ($i <= $n){
            echo '<td bgcolor="orange">';
            echo $i,"/",$i+2;
          echo '</td>';
           $i++;
               if ($i > $n) {


         echo'<center>';
         echo'<table>
                <tr>
                <td> </td>
                </tr>
                </table>';

            echo'<form method="post" action="Practica6.php">';
               echo' <table border cellpadding=5 cellspacing=1>';
                   echo' <tr>';

                      echo' <td bgcolor="red"> <input type="submit" value="Hacer otra pueba" /> </td>';
                   echo' </tr>';
                echo'</table>';  
            echo'</form>';
        echo'</center>';
        }
        }
         
        echo '</tr>';
        echo '</table>';
        echo'</center>';
        ?>
    </body>
</html>
