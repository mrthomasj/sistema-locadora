<!DOCTYPE>
<html>
    <head>
        <title>PHP com Mysql</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Consulta tabela completa</h3>
        <input type="button" onclick="window.location='index.php';" value="Voltar">
        
        <?php
            include_once('conexao.php');
            $mysql = new Dbo();
            $mysql->connect();
            $query = @mysqli_query($mysql->cn, "select * from tabelaimg order by produto");
            if(!$query){
                echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
                die('<b>Query inválida:</b>' . @mysqli_error($mysql->cn));
            } ?>
        
        <br><br> <b>Clique na imagem para ver detalhes</b><br><br>
        
        <?php
        echo "<table border='1px'>";
        echo "<tr><th width='30px' align='center'>ID</th><th width='100px'>Codigo</th>
              <th width='250px'>Produto</th><th width='100px'>Valor</th><th width='100px'>Imagem</th></tr>";
        while($dados=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td align='center'>" . $dados['id'] . "</td>";
            echo "<td>" . $dados['codigo'] . "</td>";
            echo "<td>" . $dados['produto'] . "</td>";
            echo "<td align='right'> R$ " . $dados['valor'] . "</td>";
            if(empty($dados['imagem'])){
                $imagem = 'SemImagem.png';
            }else{
                $imagem = $dados['imagem'];
            }
               
            $id = base64_encode($dados['id']);
               
            echo "<td align='center><a href='verproduto.php?id=$id'>
                  <img src='imagens/$imagem' width='50px' height='50px'></a>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        $mysql->close();
        
        ?>
    </body>


</html>