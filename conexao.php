<?php


class Dbo{

    private $host = "localhost";
    private $user =  "root";
    private $pass = "";
    private $banco = "banco";
    public $cn;
    
    function connect(){
        
        $this->cn = @mysqli_connect($this->host, $this->user, $this->pass, $this->banco);
        if(!$this->cn){
            die(" Problemas com a conexão");
        }
    }
    
    
    function close(){
        mysqli_close($this->cn);
        return;
    }
    
    function sqlQuery($string, $path){
        $results = @mysqli_query($this->cn, $string);
        if(!$results){
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query inválida:</b>' . @mysqli_error($this->cn));
        }else{
            $num = @mysqli_num_rows($results);
            if($num == 0){
                echo "<b>Código: </b> não localizado.<br><br>";
                echo '<input type="button" onclick="window.location=' . "'$caminho'" . '"; value="Voltar"> <br><br>';
                exit;
            }else{
                $dados = @mysqli_fetch_array($results);
            }
        }
        $this->close();
        return $dados;
    }
    
    
    function sqlstring($string, $text){
        $results = @mysqli_query($this->cn, $string);
         if(!$results){
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query inválida:</b>' . @mysqli_error($mysql->cn));
        }else{
             echo "<b>$text </b>- Realizada com sucesso!";
        }
        $this->close();
        return;
    }

}
?>