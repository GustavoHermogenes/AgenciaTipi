<header class="site topo" id="topo-fixo">

        <h1> Agência TIPI</h1>

        <div>

        <button class="abrir-menu"></button>

        <nav class="menu">


            <button class="fechar-menu"></button>

            <?php
            $url = $_SERVER['REQUEST_URI'];
            $urlBase = basename($url);
            ?>

            <ul>
                <li> <a href="index.php" <?php if($urlBase == 'index.php') echo 'class="ativo"'?>>home</a></li>
                <li> <a href="sobre.php" <?php if($urlBase == 'sobre.php') echo 'class="ativo"'?>>sobre</a></li>
                <li> <a href="servico.php" <?php if($urlBase == 'servico.php') echo 'class="ativo"'?>>serviço</a></li>
                <li> <a href="contato.php" <?php if($urlBase == 'contato.php') echo 'class="ativo"'?>>contato</a></li>

                <!-- a tag li é uma tag que diz que o elemento contido dentro dela fará parte de uma lista, sendo-a ordenada (ol) ou desordenada/ não ordenada (ul) -->

            </ul>

            <div class="rede-social-topo">

                <button>login</button>
    
                <ul>
                    <li><a href="#">instagram</a></li>
                    <li><a href="#">whatsapp</a></li>
                    <li><a href="#">facebook</a></li>
                </ul>

                <!-- nesta seção o elementos e tags antes ditos, foram usados para adicionar as redes sociais, porem como links, e somente no css esses links serão transformados em icones -->
    
            </div>
            
        </nav>

        </div>

    </header>