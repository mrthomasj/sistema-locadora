<html>
    <head>
        <title>Agendamentos</title>
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
                <p>Agendamento de Locação</p>
            </div>

            <div class="form-container">
                <form name="cadVei" method="post" action="#">

                    <table border="0" cellpadding="5" cellspacing="5" align="center">
                        <tr>
                            <td>
                                <label>CPF</label><br>
                                <input type="text" name="cpfCliente_Agendamento" id="cpfAgend">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nome</label><br>
                                <input type="text" name="nomeCliente_Agendamento" id="nomeAgend">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Fabricante</label><br>
                                <input type="text" name="fabVeiculo" id="fabVeic">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nome:</label><br> <!--Aqui acho melhor concatenar os campos Veiculo, Ano/Mod, Portas, Cor e Combustível-->
                                <input type="text" name="nomVeiculo" id="nmVeic">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Data Locação:</label><br>
                                <input type="text" name="dtLocacao" id="dtLoc">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Data Retorno:<br>
                                <input name="dtRetorno" type="text" id="dtRet"/></label><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Valor:<br>
                                <input name="vlDiaria" type="text" id="vlDiar"/></label><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Vendedor:<br>
                                <input name="vendLocacao" type="text" id="vendLoc" /></label><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tipo de Pagamento</label><br>
                                <input type="text" name="tipoPagamento" id="tpPag">
                            </td>
                        </tr>
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