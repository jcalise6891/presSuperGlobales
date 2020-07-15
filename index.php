<?php
    setcookie('pseudo', 'Test', time() + 365*24*3600, null, null, false, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>


<div class="po-var">

<?php

// Portée des variables//

// $test = "test";

// function affichetest(){
//     echo $test;
// }
// afficheTest();

$test = "test";

function affichetest(){
    global $test;
    echo $test;
}
afficheTest();

?>

</div>

<!-- ---------------------------- Présentation des différentes variables globales ------------------------ -->

<div class="demo-sg">

    <div id="glob" class="sg">

        <h1>$GLOBALS</h1>

        <?php

            function test() {
                $testGlobal = "Bonsoir";

                echo '$testGlobal dans le contexte global : ' . $GLOBALS["testGlobal"] . "<br><br>";
                echo '$testGlobal dans le contexte courant : ' . $testGlobal . "\n";
            }

            $testGlobal = "Bonjour";
            test();
        ?>

    </div>
    
    <div id="serv" class="sg">

        <h1>$_SERVER</h1>

        <?php

            $indicesServer = array('PHP_SELF',
            'argv',
            'argc',
            'GATEWAY_INTERFACE',
            'SERVER_ADDR',
            'SERVER_NAME',
            'SERVER_SOFTWARE',
            'SERVER_PROTOCOL',
            'REQUEST_METHOD',
            'REQUEST_TIME',
            'REQUEST_TIME_FLOAT',
            'QUERY_STRING',
            'DOCUMENT_ROOT',
            'HTTP_ACCEPT',
            'HTTP_ACCEPT_CHARSET',
            'HTTP_ACCEPT_ENCODING',
            'HTTP_ACCEPT_LANGUAGE',
            'HTTP_CONNECTION',
            'HTTP_HOST',
            'HTTP_REFERER',
            'HTTP_USER_AGENT',
            'HTTPS',
            'REMOTE_ADDR',
            'REMOTE_HOST',
            'REMOTE_PORT',
            'REMOTE_USER',
            'REDIRECT_REMOTE_USER',
            'SCRIPT_FILENAME',
            'SERVER_ADMIN',
            'SERVER_PORT',
            'SERVER_SIGNATURE',
            'PATH_TRANSLATED',
            'SCRIPT_NAME',
            'REQUEST_URI',
            'PHP_AUTH_DIGEST',
            'PHP_AUTH_USER',
            'PHP_AUTH_PW',
            'AUTH_TYPE',
            'PATH_INFO',
            'ORIG_PATH_INFO') ;

            echo '<table cellpadding="10">' ;
            foreach ($indicesServer as $arg) {
                if (isset($_SERVER[$arg])) {
                    echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
                }
                else {
                    echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
                }
            }

            echo '</table>' ;
        ?>

    </div>

    <div id="get" class="sg">
        <h1>$_GET</h1>

        <?php
            echo 'Bonjour&nbsp;' . htmlspecialchars($_GET["name"]) .' '.htmlspecialchars($_GET["lname"]) .'!';
        ?>

    </div>

    <div id="post" class="sg">
        <h1>$_POST</h1>

        <form action="" method="post">
            <p>Votre nom <input type="text" name="name" id="name"></p>
        </form>

        <?php
            echo 'Bonjour ' . htmlspecialchars($_POST["name"]) . '!';
        ?>


    </div>

    <div id="file"class="sg">

        <h1>$_FILES</h1>

        <form action="" method="post" enctype="multipart/form-data"> 
            <input type="file" name="file"> 
            <input type="submit" value="Upload Image"> 
        </form> 

        <?php

            echo "<pre>"; 
            print_r($_FILES); 
            echo "</pre>"; 


            echo $_FILES['file']['size'];
        ?> 


    </div>


    <div id="cook" class="sg">

        <h1>$_COOKIE</h1>

    
        <?php
            echo $_COOKIE['pseudo'];
        ?>    
        

    </div>

    <div id="requ" class="sg">

        <h1>$_REQUEST</h1>
        
        <?php
           echo "<pre>"; 
           print_r($_REQUEST); 
           echo "</pre>"; 
        ?>

    </div>

</div>
    
</body>
</html>