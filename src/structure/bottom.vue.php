<?php
/**
 * 
 */
?>

        <script src="<?= add_version('./js/jquery-3.6.0.min.js') ?>"></script>
        <?php foreach ($table['js']['listSCRBottom'] as $value) : ?>
            <script type="<?= $table['js']['type'] ?>" 
                src="<?= add_version($value) ?>">

            </script>
        <?php endforeach; ?>

    </body>

</html>