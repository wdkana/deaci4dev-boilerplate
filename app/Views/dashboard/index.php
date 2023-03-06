<h1>DASHBOARD</h1>
<p>
    <?php
    if (isset($session) && !empty($message)) {
        echo $message;
    }
    ?>
</p>

<p>your email:
    <?= $email ?>
</p>
<p>your api token:
    <?= $token ?>
</p>
<h3>islogin:
    <?= $isLogin ?>
</h3>