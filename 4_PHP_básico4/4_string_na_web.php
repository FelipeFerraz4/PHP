<?php
    $nome = 'campo" /> <script>alert("teste");</script>';
    ?>
    <input type="text" name="<?php echo addslashes($nome); ?>"/>
    <?php //faz com que os caracter de escopo recebam uma barra, impedindo do texto deixar de ser string 
    ?>
    <input type="text" name="<?php echo htmlentities($nome); ?>"/>
    <?php //converte qualquer caracter que poder ser um html valido para codigo html '<' -> '&lt;'