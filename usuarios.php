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
            padding: 5px;
        }
        *{
            margin: 0;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            background-color: white;
            color: black;
            padding: 10px;
            transition: 250ms;
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
            <img src="skin.jpg">
        </div>
        <div id= "dados">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, labore architecto eum aliquam mollitia, ad quia sed totam nobis tenetur, facere libero nemo nostrum porro perspiciatis quisquam beatae? Laboriosam, incidunt?</p>
        </div>
    </main>
</body>
</html>