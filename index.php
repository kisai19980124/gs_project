<?php
session_start();
include("includes/func.php");
include("./db/db_config.php");
sschk();
//SQL
$pdo = db_conn();

$sql = "SELECT employees.*, departments.name AS department_name FROM employees 
        JOIN departments ON employees.department_id = departments.id;";
$stmt = $pdo ->prepare($sql);
$status = $stmt ->execute();

$values = "";
if ($status == false) {
    sql_error($stmt);
}

$values = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($values, JSON_UNESCAPED_UNICODE);
//header
include("includes/header.php");

?>
<div class="content">
            <div class="div-material-out" style="flex-grow:1;">
                <div class="div-material" style="flex-direction: column;">
                    <h1 class="md-typescale-headline-medium">
                       ドローンデモ会 参加アンケート アンケート結果
                    </h1>
                    <md-list style="">
                    <?php foreach($values as $v){ ?>
                        
                        <md-list-item>
                            <div slot="start"><?=h($v["id"])?></div>
                            <div slot="headline"><?=h($v["name"])?></div>
                            <div slot="supporting-text"><?=h($v["department_name"])?></div>
                            <!--
                            <md-icon-button slot="end" href="check.php?id=<?=h($v["id"])?>">
                            <md-icon >visibility</md-icon>
                            </md-icon-button>
                            <md-icon-button slot="end" href="detail.php?id=<?=h($v["id"])?>">
                            <md-icon >edit</md-icon>
                            </md-icon-button>
                            <md-icon-button slot="end" href="delete.php?id=<?=h($v["id"])?>">
                            <md-icon >delete</md-icon>
                            </md-icon-button> -->
                        </md-list-item>
                        <md-divider></md-divider>
                    <?php } ?>
                    
                    </md-list>
                </div>
            </div>
                
            <div class="div-material-out" style="flex-grow:1;">
                <div class="div-material" style="flex-direction: column;">

                </div>
            </div>
</div>
<?php
    include("includes/footer.php");
?>
<script src="assets/js/app.js"></script>