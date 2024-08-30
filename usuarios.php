<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            display: flex;
            /* flex-direction: row; */
            list-style:none;
            background-color: black;
        }
        li{
            padding: 10px;
        }
        *{
            margin: 0;
        }
        a{
            text-decoration: none;
            color: yellow;
        }
        a:hover{
            background-color: yellow;
            color: black;
            padding: 11px;
            transition: 250ms;
        }
        main{
            display: flex;
            margin: 10px;
            padding: 10px;
        }
        img{
            width: 320px;
        }
        #imagem{
            /* background-color: lightblue; */
            /* width:"20%"; */
            /* height:"20%"; */
        }
        #dados{
            background-color: white;
            width: 50%;
            height: 50%;
            color: black;
            border: 2px solid;
            border-radius: 10px;
            padding: 10px;
        }
        span{
            color: black;
            font-weight: bold;
            border-bottom: 1px solid;
            margin: 15px;
            font-size: 20px;
        }
        p{
            background-color: white;
            /* border: 1px dashed; */
            padding: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="imagem">
            <img src="https://images-americanas.b2w.io/produtos/5867254281/imagens/hello-kitty-badtz-maru-display-festa-decoracao/5867254281_1_large.jpg">
        </div>
        <div id= "dados">
            <p>
                <?php
                include "conecta.php";
                $sql = "SELECT id, nome, senha, email FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while($registro = mysqli_fetch_assoc($resultado)) {
                        echo "<span> ID: </span>". $registro["id"];
                        echo "<span> Nome: </span>". $registro["nome"];
                        echo "<span> E-mail: </span>". $registro["email"];
                        echo "<br>";
                    }
                }
                ?>
            </p>
        </div>
    </main>
</body>
</html>