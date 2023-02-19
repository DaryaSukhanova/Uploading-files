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
            <h1>Загруженные файлы</h1>
            <div class="files">
               
               <?php
                  // if (move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__.'\\myFiles\\'.$_FILES['filename']['name'])){

                  //    echo 'Файл успешно загружен';
                  //    echo 'Исходное имя файла - ' .$_FILES['filename']['name']. '<br>';
                  //    echo 'MIME-тип принятого файла - '.$_FILES['filename']['type']. '<br>';
                  //    echo $_FILES['filename']['name'];
                  // } else {
                  //    echo 'Ошибка загрузки файла';
                  // }
                  echo ('<br>');
                  if ($_FILES["filename"]["error"] !== NULL) {
                     foreach ($_FILES["filename"]["error"] as $key => $error) {
                        if ($error == UPLOAD_ERR_OK) 
                        {  
                           if (($_FILES['filename']['type'][$key] == 'image/jpeg' || $_FILES['filename']['type'][$key] == 'image/png')) {
                              if ($_FILES['filename']['size'][$key] > 3 * 1024 * 1024) {
                                 echo('размер файла превышает 3 мегабайт <br>');
                              } else {
                                 $tmp_name = $_FILES["filename"]["tmp_name"][$key];
                                 $name = basename($_FILES["filename"]["name"][$key]);
                                 move_uploaded_file($tmp_name, "myFiles/$name");                        
                              }                        
                           } else {
                              echo($_FILES["filename"]["name"][$key].' - недопустимый тип файла <br>');
                           }
                        } 
                        
                     }
                  }
                     $dir = "myFiles";
                     if (is_dir($dir)) {
                        if ($dh = opendir($dir)) {
                        
                           while (($file = readdir($dh)) !== false) {
                              if ($file !== '.' && $file !== '..'){
                              
                                 echo ("
                                 <div class='image'>
                                    <img src='".$dir."/".$file."'/> <br>
                                    <form id='delete' method='post' action='delete.php'>
                                    <input type='hidden' value='".$file."' name='deleteFile'>
                                    <input class='button' class='in-cart' type='submit' value='Удалить'>
                                    </form>                              
                                 </div>

                                 ");                           
                              }

                              
                           }
                           closedir($dh);
                        }
                     }                     
                  

               ?>               
            </div>

         </main>
      </div>
   </div>
</body>
</html>


