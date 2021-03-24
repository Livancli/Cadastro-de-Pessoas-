<?php 
        $titulo = "Cadastrar Pessoas";
    require_once "utils/header.php";
?>
    <script type="text/javascript" src="js/script.js"></script>

    <div class="corpo">
        <h1>Cadastro de Pessoas</h1>
        <br><br>
        <form action="processaform.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome" onblur="validar_nome(this)">
            <label>Idade</label>
            <input type="number" name="idade">
            <label>Email</label>
            <input type="email" name="email">
            <input type="submit" value="Salvar">
        </form>

        <h3 id="msg_erro" style="color: red;"></h3>
        <?php 
        if(isset($_GET["sucesso"])){
            echo "<h3>Cadastro realizado com Sucesso</h3>";
        }
        ?>
    </div>
</body>
</html>