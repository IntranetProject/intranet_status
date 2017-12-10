<?php
include("database.php");
function is_url_exist($url){
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_NOBODY, true);
   curl_exec($ch);
   $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $precode = substr($code, 0, 1);
   if(!($precode == 3 || $precode == 5 )){
       $status = '<p style="display: inline" class="green-text text-accent-3">up!</p>';
   }else{
       $status = '<p style="display: inline" class="deep-orange-text text-accent-3">under maintenance!</p>';
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
                <h1 class="center-align"><b>Intranet Project Status</b></h1>
                <small class="notice">
               <p class="center-align">Click on any Name to visit the site!</p>
            </small>
                <div class="collection">
                    <a target="_blank" class="collection-item" href="http://intranetproject.net">Main site is
               <?php
                  echo '<p style="display: inline" class="green-text text-accent-3">up!</p>';
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://docs.intranetproject.net">Docs are
               <?php
                  echo is_url_exist("http://docs.intranetproject.net/");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://blog.intranetproject.net">Blog is
               <?php
                  echo is_url_exist("http://blog.intranetproject.net/");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://shop.intranetproject.net">Shop is
               <?php
                  echo is_url_exist("http://shop.intranetproject.net/");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://packages.intranetproject.net">Package Manager is
               <?php
                  echo is_url_exist("http://packages.intranetproject.net/");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://account.intranetproject.net">Account Service is
               <?php
                  echo is_url_exist("http://account.intranetproject.net/");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://download.intranetproject.net">Download is
               <?php
                  echo is_url_exist("http://download.intranetproject.net/");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://api.intranetproject.net/v1/ping">API is
               <?php
                  echo is_url_exist("http://api.intranetproject.net/v1/ping");
                  ?>
               </a>
                    <a target="_blank" class="collection-item" href="http://docs.api.intranetproject.net">API Docs are
               <?php
                  echo is_url_exist("http://docs.api.intranetproject.net/build/index.html");
                  ?>
               </a>
                    </ul>
                </div>
                <?php
            $sql = "SELECT * FROM incidents";
            $res = mysqli_query($link, $sql);
            if ($res) {
                while ($row = $res->fetch_object()) {
                    echo '<div class="row">
                    <div class="col s12 m8 offset-m2">
                        <div class="card red">
                            <div class="card-content white-text">
                                <span class="center card-title">' . $row->title . ' on ' . $row->created_at . '</span>
                                <p>' . $row->text . '</p>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
                ?>
            </div>
        </main>
        <footer class="page-footer teal lighten-2">
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
                                <p class="grey-text text-lighten-3" href="#!">&lt; &gt;</i>
                                    </b> with <i style="color: red;">&hearts;</i> by <a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">Intranet</a></p>
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
