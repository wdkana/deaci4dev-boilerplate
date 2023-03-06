<div class="container mx-auto">
    <h1>HOMEPAGE</h1>
    <p>
        <?php
        if (isset($session) && !empty($session->getFlashdata('message'))) {
            echo $session->getFlashdata('message');
        }
        ?>
    </p>
</div>