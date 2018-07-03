<!doctype html>
<html lang="en">
<?php include_once $Common->GetTemplatePath('header_tamp');?>
<body class="login">
<h2>Админ панель</h2>
<div class="form_admin_in">
    <form action="/admin.php" method="post">
        <label for="login">Ваш логин</label>
        <input type="text" name="login" placeholder="Логин">
        <label for="password">Ваш пароль</label>
        <input type="password" name="password" placeholder="Пароль">

            <?php  if(!empty($error))
            {
            ?>
        <div class="error">
             <?php echo $error; ?>
               </div>
         <?php } ?>

        <input type="submit">
    </form>
</div>
</body>
</html>