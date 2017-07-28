<?php
function is_url_exist($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($code == 200){
        $status = '<p class="online st">up!</p>';
    }else{
        $status = '<p class="offline st">under maintenance!</p>';
    }
    curl_close($ch);
    return $status;
}
?>
    <html>

    <head>
        <title>IntranetProject - Status</title>
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <h1 class="title"><b>IntranetProject Status</b></h1>
            <div class="content">
                <div class="inner">
                    <small class="notice">
                        <p>Click on any Name to visit the site!</p>
                    </small>
                    <div class="clearer"></div>
                    <a target="_blank" class="site" href="http://intranetproject.net">Main site</a> is
                    <?php
                    echo is_url_exist("http://intranetproject.net/up.txt");
                    ?>
                        <div class="clearer"></div>
                        <a target="_blank" class="site" href="http://docs.intranetproject.net">Docs</a> are
                        <?php
                    echo is_url_exist("http://docs.intranetproject.net/up.txt");
                    ?>
                            <div class="clearer"></div>
                            <a target="_blank" class="site" href="http://blog.intranetproject.net">Blog</a> is
                            <?php
                    echo is_url_exist("http://blog.intranetproject.net/up.txt");
                    ?>
                                <div class="clearer"></div>
                                <a target="_blank" class="site" href="http://shop.intranetproject.net">Shop</a> is
                                <?php
                    echo is_url_exist("http://shop.intranetproject.net/up.txt");
                    ?>
                                    <div class="clearer"></div>
                                    <a target="_blank" class="site" href="http://download.intranetproject.net">Download</a> is
                                    <?php
                    echo is_url_exist("http://download.intranetproject.net/up.txt");
                    ?>
                                        <div class="clearer"></div>
                                        <a target="_blank" class="site" href="http://json.intranetproject.net">JSON tool</a> is
                                        <?php
                    echo is_url_exist("http://json.intranetproject.net/up.txt");
                    ?>
                                            <div class="clearer"></div>
                </div>
                <hr>
                <div style="clear:both"></div>
                <div class="media twitter">
                    <a class="twitter-timeline" data-theme="dark" data-link-color="#2B7BB9" href="https://twitter.com/intranetprojec">Tweets by intranetprojec</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="media discord">
                    <iframe src="https://discordapp.com/widget?id=313774393342033920&theme=dark" height="500" allowtransparency="true" frameborder="0"></iframe>
                </div>
            </div>
            <div class="footer">
                    <div class="git">
                        <p><a href="https://github.com/IntranetProject">GitHub</a></p>
                    </div>
                    <div class="imp">
                        <p><a href="imprint.html">Impressum</a></p>
                    </div>
                    <div class="credit">
                        <p><b><i style="color: black;">&lt; &gt;</i></b> with <i style="color: red;">&hearts;</i> by <a href="https://github.com/IntranetProject">Intranet</a></p>
                    </div>
                </div>
        </div>
    </body>

    </html>
