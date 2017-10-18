<?php
   function is_url_exist($url){
       $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_NOBODY, true);
       curl_exec($ch);
       $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

       if($code == 200){
           $status = 'up!';
       }else{
           $status = 'under maintenance!';
       }
       curl_close($ch);
       return $status;
   }
   ?>
<html>
   <head>
      <title>IntranetProject - Status</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
      <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
   </head>
   <body>
      <main>
         <div class="container">
            <h1 class="center-align"><b>IntranetProject Status</b></h1>
            <small class="notice">
               <p class="center-align">Click on any Name to visit the site!</p>
            </small>
            <div class="collection">
               <a target="_blank" class="collection-item " href="http://intranetproject.net">Main site is
               <?php
                  echo is_url_exist("http://intranetproject.net/up.txt");
                  ?>
               </a>
               <a target="_blank" class="collection-item" href="http://docs.intranetproject.net">Docs are
               <?php
                  echo is_url_exist("http://docs.intranetproject.net/up.txt");
                  ?>
               </a>
               <a target="_blank" class="collection-item " href="http://blog.intranetproject.net">Blog is
               <?php
                  echo is_url_exist("http://blog.intranetproject.net/up.txt");
                  ?>
               </a>
               <a target="_blank" class="collection-item" href="http://shop.intranetproject.net">Shop is
               <?php
                  echo is_url_exist("http://shop.intranetproject.net/up.txt");
                  ?>
               </a>
               <a target="_blank" class="collection-item " href="http://download.intranetproject.net">Download is
               <?php
                  echo is_url_exist("http://download.intranetproject.net/up.txt");
                  ?>
               </a>
               <a target="_blank" class="collection-item" href="http://json.intranetproject.net">JSON tool is
               <?php
                  echo is_url_exist("http://json.intranetproject.net/up.txt");
                  ?>
               </a>
               </ul>
            </div>
         </div>
      </main>
      <footer class="page-footer">
         <div class="container">
            <div class="row">
               <div class="col l6 s12">
                  <h5 class="white-text">End..</h5>
                  <p class="grey-text text-lighten-4">This is it. Just a simple status site..</p>
               </div>
               <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                     <li><a class="grey-text text-lighten-3" href="https://github.com/IntranetProjec">GitHub</a></li>
                     <li><a class="grey-text text-lighten-3" href="imprint.html">Imprint</a></li>
                     <li>
                        <p class="grey-text text-lighten-3" href="#!">&lt; &gt;</i></b> with <i style="color: red;">&hearts;</i> by <a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">Intranet</a></p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               © 2017 Intranet Project
            </div>
         </div>
      </footer>
      </div>
   </body>
</html>
