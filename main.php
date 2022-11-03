<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт-Визитка</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <img src="https://sysadmin-note.ru/wp-content/uploads/images/5f9bcbbd849a0541852f4158.jpg" width="420" height="420" alt="Программист.jpg">                    
                </div>

                <div class="fullname">
                    <p> Меня зовут:
                    <?php echo $name, ' ', 
                    $surname . '<br>'; 
                          echo 'Я из города - ', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Работаю  
                    <?php  echo $work;   ?> <br>
                    Защищаю компании от
                    <?php  echo $des;   ?>          
                     </p>
        
                </div>


            <div class="article">
                <p class="text">
                <br>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
