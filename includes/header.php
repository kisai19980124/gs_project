<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="importmap">
      {
        "imports": {
          "@material/web/": "https://esm.run/@material/web/"
        }
      }
    </script>
    <script type="module">
      import '@material/web/all.js';
      import {styles as typescaleStyles} from '@material/web/typography/md-typescale-styles.js';
  
      document.adoptedStyleSheets.push(typescaleStyles.styleSheet);
    </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>人事配属最適化サービス</title>
</head>
<body>
    <div class="window">
            <div class="banner" style="box-sizing: border-box;">
                <div class="banner_name" style="flex-grow:1;">
                    <h1 class="poppins-medium">
                            
                        人事配属最適化サービス 
                    </h1>
                </div>
                    <?php if (isset($_SESSION) && isset($_SESSION["chk_ssid"]) && $_SESSION["chk_ssid"]): ?>
                        <div class="banner_button">
                            <md-icon-button href="./logout.php" target="_self">
                            <md-icon>logout</md-icon>
                            </md-icon-button>
                        </div>
                    <?php endif; ?>
                
            </div>