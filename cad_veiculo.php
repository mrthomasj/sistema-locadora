<html>
    <head>
        <title>Veículos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/indexStyle.css" rel="stylesheet">
        
        
        <script type="text/javascript" src="js/indexScript.js"></script>
       
        
        
    </head>
    <body>
        <section class="container-box">
                <div onclick="openNav()" class="openMenu">MENU</div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="cad_cliente.php">Cadastro de clientes</a>
                    <a href="cad_veiculo.php">Cadastro de veículos</a>
                    <a href="#">Consulta de locação</a>
                    <a href="agend_locacao.php">Agendamento de locação</a>
                </div>
                
            
            
                <div id="main">
            <div class="header">
                <p>Cadastro de Veículos</p>
            </div>

            <div class="form-container">
                <form name="cadVei" method="post" action="#">

                    <table border="0" cellpadding="5" cellspacing="5" align="center">
                        <tr>
                            <td>
                                <label>Fabricante</label><br>
                                <input type="text" name="fabVeiculo" id="fabVeic">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nome:</label><br>
                                <input type="text" name="nomVeiculo" id="nmVeic">
                            </td>
                        </tr>
                        <tr>
                            <td width="40%">
                                <label>Ano:</label><br>
                                <input type="text" name="anoVeiculo" id="anoVeic">
                            </td>
                            <td width="60%">
                                <label>Modelo:<br>
                                <input name="modVeiculo" type="text" id="modVeic"/></label><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Portas:<br>
                                <input name="portasVeiculo" type="text" id="nrporVeic"/></label><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Combustível:<br>
                                <input name="combVeiculo" type="text" id="combVeic" /></label><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Cor</label><br>
                                <input type="text" name="corVeiculo" id="corVeic">
                            </td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input type="submit" value="Enviar" class="btn">
                            </td>
                        </tr>

                    </table>


                </form>
            </div>

        </div>

    </section>


</body>

</html>