<?php
    include("./includes/header.php")

?>
<div class="content">
            <div class="div-material-out" style="flex-grow:3;">
                <div class="div-material" style="flex-direction: column;">
                    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
                    <h1 class="md-typescale-headline-medium">ログイン</h1>
                    
                    <form name="form1" action="login_act.php" method="post">
                        <p><md-filled-text-field label="ID" required name="lid" ></md-filled-text-field></p>
                        <p><md-filled-text-field label="PW" required name="lpw" type="password"></md-filled-text-field></p>
                    
                    
                        <md-filled-button type="submit">ログイン</md-filled-button>
                    
                    </form>
                </div>
            </div>
        </div>
<?php
    include("./includes/footer.php")

?>