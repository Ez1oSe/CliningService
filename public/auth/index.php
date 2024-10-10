<?php
    include("../inc/header.php");
?>
<section class="page">
    <div class="container p-3">
        <h1 class="text-center mb-3 text-success-emphasis display-1">Вход</h1>
        <form action="/profile/" method="post" class="m-auto">
            <div class="mb-3">
                <label for="login" class="form-label fs-5">Ваш логин</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fs-5">Ваш пароль</label>
                <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password" name="password">
            </div>
            <input type="submit" class="btn btn-success mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill fw-bold" value="Войти">
        </form>
    </div>
</section>
<?php
    include("../inc/footer.php");
?>