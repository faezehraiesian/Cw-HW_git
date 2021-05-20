<?php
              
              if(isset($_POST["submit"]))
              {
              $Name=$_POST["name"];
              $Email=$_POST["email"];
              $Comment=$_POST["cm"];
              $savestring = $Name . "," . $Email . " " . $Comment;
              $fp = fopen("db.txt", "w");

              fwrite($fp, "<br />" . $savestring);
              fclose($fp);
              echo"از برقراری ارتباط متشکرم بزودی پاسخی برای شما ارسال خواهد شد ";
              }
              ?>