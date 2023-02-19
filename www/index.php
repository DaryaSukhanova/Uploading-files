<!DOCTYPE html>
<html lang="ru">
<head>
   <title>FILE</title>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
   <meta name="viewport" content="width=devix ce-width, initial-scale=1.0">
   <link rel="stylesheet" href="/assets/styles.css">
   <link rel="icon" href="../img/kimono-dress.ico" type="image/x-icon" />
</head>
<header>

</header>
<body>
   <div class="wrapper">
      <div class="container">
         <main class="main">
            <h1>Загрузка файлов</h1>
            
            <div class="download-files">
               <form action="script.php" method ="post" enctype="multipart/form-data">
                  <?php 
                  for ($i = 0; $i < 4; $i++){
                     echo '<input type="file" name="filename[]">';
                  }    
                  
                  ?>
                  <input type="submit" class='button' value="Отправить">
               </form>               
            </div>

         </main>
      </div>
   </div>
</body>
</html>
