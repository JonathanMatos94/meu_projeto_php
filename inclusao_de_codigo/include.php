<?php

include "teste.php";

?>

<p>
    Após o Include <br>

    <?php echo "$teste // $teste2" ?>
</p>

<?php

include __DIR__ . "../teste_diretorio.php"; //Para incluir outros diretórios em diferentes namespaces