<?php

// Funciona igual o include, porém se o arquivo incluído não existir
// o require para a execução do programa, diferente do include que apenas
// gera um Warning

require "teste.php";

?>
<p>Testando o require em outras pastas</p>

<?php

    require "arquivo/funcao.php";

?>