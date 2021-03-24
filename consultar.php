<?php 
        $titulo = "Consultar Pessoas";
    require_once "utils/header.php";
?>

    <div class="corpo">
        <h1>Listas de Pessoas</h1>
        <br><br>
        <table>
            <thead>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php 
                $handle = fopen ("pessoas.csv" , "r");
                while (($data = fgetcsv($handle, 1000, ";")) !==FALSE) {
                    echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td></tr>";
                }
                ?>
            </tbody>

        </table>

    </div>
</body>
</html>