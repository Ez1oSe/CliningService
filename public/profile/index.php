<?php
    include("../inc/header.php");
    include("../function/function.php");
?>
<section class="page">
    <div class="container p-3">
        <h1 class="text-center mb-3 text-success-emphasis display-1">Личный кабинет</h1>
        <?php 
            echo fnGetProfile(); 
            echo fnGetCardProfile();
        ?>
        
        <a href="/application/" class="btn btn-success mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill fw-bold">Подать заявление</a>
    </div>
</section>
<?php
    include("../inc/footer.php");
?>
