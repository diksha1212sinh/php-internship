<html>
    <body>
        <?php
        echo"the name is="; 
        echo $_POST["txt1"];
          echo"the rollno. is="; 
        echo $_POST["txt2"];
          echo"the pps is="; 
        echo $_POST["txt3"];
          echo"the english is="; 
        echo $_POST["txt4"];
          echo"the ss is="; 
        echo $_POST["txt5"];
          echo"the dbms is="; 
        echo $_POST["txt6"];
          echo"the math is="; 
        echo $_POST["txt7"];
         $a=$_post['txt3'];
          $b=$_post['txt4'];
          $c=$_post['txt5'];
          $d=$_post['txt6'];
          $e=$_post['txt7'];
          $sum=$a+$b+$c+$d+$e;
          echo "total marks:$sum";
          $p=($sum/500)*100;
          echo"pesentage:$p";
          
        ?>
    </body>
</html>
