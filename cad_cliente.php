<html>
    <head>
        <title>Home</title>
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
                    <a href="cad_cliente.php">Cadastro de cliente</a>
                    <a href="#">Cadastro de veículo</a>
                    <a href="#">Consulta de locação</a>
                    <a href="#">Agendamento de locação</a>
                </div>
                
            
            
                <div id="main">
                    <div class="header">
                        <p>Cadastro de Clientes</p>
                    </div>
                    
                    <div class="form-container">
                        <form name="cadCli" method="post" action="#">
                            
                            <table border="0" cellpadding="5" cellspacing="5" align="center">
                                <tr>
                                    <td>
                                        <label>CPF:</label><br>
                                        <input type="text" name="cpf" id="cpf" onblur="validaCpf('cpf')">
                                        <span id="cpfError" style="display:  none;">Utilize somente números.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Nome:</label><br>
                                        <input type="text" name="cliNome" id="cliNm">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Data de Nascimento:</label><br>
                                        <input type="date" name="dtNasc" id="dtNasc">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Cep:<br>
                                        <input name="cep" type="text" id="cep" value=""  maxlength="9" onblur="pesquisaCep(this)"/></label><br />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="60%">
                                        <label>Rua:<br>
                                        <input name="rua" type="text" id="rua" /></label><br />
                                    </td>
                                    <td>
                                        <label >
                                            Número:<br>
                                            <input type="text" id="nr" name="numero"/><br/>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Bairro:<br>
                                        <input name="bairro" type="text" id="bairro"/></label><br />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Cidade:<br>
                                        <input name="bairro" type="text" id="cidade"/></label><br />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>UF:<br>
                                        <input name="uf" type="text" id="uf" /></label><br />
                                    </td>
                                </tr>
                                <tr></tr>
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
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nunc, lacinia at maximus ac, bibendum ut nisl. Integer volutpat ante nibh, non ullamcorper dui bibendum ac. Sed congue ornare massa, ut accumsan mauris condimentum eu. Morbi tincidunt, orci id molestie luctus, tortor velit aliquet est, ut dictum mauris ipsum quis nulla. Sed pharetra id massa non cursus. Cras dui purus, eleifend in tincidunt vel, tempor sit amet nisl. In maximus enim a enim dapibus, vel dictum ex iaculis. Cras risus purus, semper ac volutpat euismod, elementum varius felis. Mauris eget dolor nisl. Nullam quis augue eget augue vulputate iaculis vel et lorem. Duis aliquet diam gravida, maximus ex non, placerat turpis. Duis efficitur efficitur luctus. Sed ipsum nisi, scelerisque pellentesque massa et, sodales maximus dolor. Sed sed nisi hendrerit, vehicula odio vel, eleifend eros. Donec hendrerit eleifend est, vel pulvinar enim commodo consequat. Phasellus finibus egestas purus, eu vestibulum eros semper sed.
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nunc, lacinia at maximus ac, bibendum ut nisl. Integer volutpat ante nibh, non ullamcorper dui bibendum ac. Sed congue ornare massa, ut accumsan mauris condimentum eu. Morbi tincidunt, orci id molestie luctus, tortor velit aliquet est, ut dictum mauris ipsum quis nulla. Sed pharetra id massa non cursus. Cras dui purus, eleifend in tincidunt vel, tempor sit amet nisl. In maximus enim a enim dapibus, vel dictum ex iaculis. Cras risus purus, semper ac volutpat euismod, elementum varius felis. Mauris eget dolor nisl. Nullam quis augue eget augue vulputate iaculis vel et lorem. Duis aliquet diam gravida, maximus ex non, placerat turpis. Duis efficitur efficitur luctus. Sed ipsum nisi, scelerisque pellentesque massa et, sodales maximus dolor. Sed sed nisi hendrerit, vehicula odio vel, eleifend eros. Donec hendrerit eleifend est, vel pulvinar enim commodo consequat. Phasellus finibus egestas purus, eu vestibulum eros semper sed.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nunc, lacinia at maximus ac, bibendum ut nisl. Integer volutpat ante nibh, non ullamcorper dui bibendum ac. Sed congue ornare massa, ut accumsan mauris condimentum eu. Morbi tincidunt, orci id molestie luctus, tortor velit aliquet est, ut dictum mauris ipsum quis nulla. Sed pharetra id massa non cursus. Cras dui purus, eleifend in tincidunt vel, tempor sit amet nisl. In maximus enim a enim dapibus, vel dictum ex iaculis. Cras risus purus, semper ac volutpat euismod, elementum varius felis. Mauris eget dolor nisl. Nullam quis augue eget augue vulputate iaculis vel et lorem. Duis aliquet diam gravida, maximus ex non, placerat turpis. Duis efficitur efficitur luctus. Sed ipsum nisi, scelerisque pellentesque massa et, sodales maximus dolor. Sed sed nisi hendrerit, vehicula odio vel, eleifend eros. Donec hendrerit eleifend est, vel pulvinar enim commodo consequat. Phasellus finibus egestas purus, eu vestibulum eros semper sed.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nunc, lacinia at maximus ac, bibendum ut nisl. Integer volutpat ante nibh, non ullamcorper dui bibendum ac. Sed congue ornare massa, ut accumsan mauris condimentum eu. Morbi tincidunt, orci id molestie luctus, tortor velit aliquet est, ut dictum mauris ipsum quis nulla. Sed pharetra id massa non cursus. Cras dui purus, eleifend in tincidunt vel, tempor sit amet nisl. In maximus enim a enim dapibus, vel dictum ex iaculis. Cras risus purus, semper ac volutpat euismod, elementum varius felis. Mauris eget dolor nisl. Nullam quis augue eget augue vulputate iaculis vel et lorem. Duis aliquet diam gravida, maximus ex non, placerat turpis. Duis efficitur efficitur luctus. Sed ipsum nisi, scelerisque pellentesque massa et, sodales maximus dolor. Sed sed nisi hendrerit, vehicula odio vel, eleifend eros. Donec hendrerit eleifend est, vel pulvinar enim commodo consequat. Phasellus finibus egestas purus, eu vestibulum eros semper sed.</p>
                    
                </div>
            
        </section>
        
        
    </body>
</html>