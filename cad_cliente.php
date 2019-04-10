<html>
    <head>
        <title>
            Cadastro de Clientes
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-control" content="no-cache">
        <link href="css/indexStyle.css" rel="stylesheet">
    </head>
    <body>
        <table border="0" cellpadding="3" cellspacing="0" width="100%">
        
            <tr>
                <td height="30" bgcolor="#8CDAFF">
                    <b>Cadastro de clientes</b>
                </td>
                <td align="right" bgcolor="#8CDAFF">
                    <?=date("d-m-Y H:i:s")?>&nbsp;
                </td>
            </tr>
        
        </table>
        
        <?php
                    $erro=Array();
            
                    foreach($_POST as $chv => $vlr){
                        if($vlr=""){
                            $erro[]= "O campo " . $chv . " não foi informado.";
                        }
                    }
                    
                    if(sizeOf($erro)==0){
                        try{
                            intval($_POST['cliCpf']);
                        }
                        catch(Exception $e){
                            $erro[] = "CPF deve conter somente números.";
                        }
                        
                        preg_match_all("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.\'-]+$/u", $_POST['cliNome'], $matches);
                        
                        
                        try{
                                if(sizeOf($matches)==0)
                                    $erro[]="Verifique o nome digitado! Utilize apenas a-z, A-Z, ', - ou espaços.";
                        }
                        catch(Exception $e){
                            
                        }
                        
                        
                        
                        //$_POST['dtNasc']
                        
                        $dtNasc = str_replace("/", "-", $_POST['cliDtNasc']);
                        
                        try{
                            
                            $timestamp =  strtotime($dtNasc);
                            
                            $ymd = date("Y-m-d", $timestamp);
                            
                        }
                        catch(Exception $e){
                            
                            $erro[] = "Verifique a data de nascimento digitada.";
                        }
                        
                        
                    }
                    
                    
                    if(sizeOf($erro)==0){
                        
                        echo '<p align="left"><font color="navy"><b>';
                        echo 'Dados informados no Cadastro:</b></font></p>';
                        echo '<table border="0" cellpaddin="5" cellspacing="0">';
                        
                        reset($_POST);
                        
                        foreach($_POST as $chv=>$vlr){
                            if(substr($chv,0,3)=="cli"){
                                echo "<tr><td>" . ucfirst(strtolower(substr($chv,3))) . "</td>";
                                echo "<td><b>" . $vlr . "</b></td></tr>\n";
                            }
                        }
                        echo '<tr><td height="60" valign="bottom"><b>Obrigado!</b></td></tr>';
                        echo "</table>";
                        
                    }else{
                        
                        echo '<p align="center"><font color="red"><b>';
                        foreach($erro as $vlr){
                            echo $vlr . "<br>";
                            echo '</b></font>';
                            echo '<a href="cad_cliente.html">Voltar</a></p>';
                    
                        }
                        
                    }
                    
        ?>
    
    </body>

</html>