<!DOCTYPE html>
<html lang="en">

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

        img {
            width: 70%;
        }

        #imagem {
            /* background-color: lightblue; */
            /* width:"20%"; */
            /* height:"20%"; */
        }

        #dados {
            /* background-color: lightcoral; */
            width: 100%;
            height: 100%;
            color: gray;
            border: 2px solid;
            border-radius: 10px;
            padding: 10px;
        }

        span {
            color: black;
            font-weight: bold;
            border-bottom: 1px solid;
            margin: 15px;
        }

        p {
            background-color: palegreen;
            /* border: 1px dashed; */
            padding: 15px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: lightgrey;
        }

        th {
            background-color: lightblue;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="imagem">
            <img src="https://cdn-icons-png.flaticon.com/512/17/17115.png">
        </div>
        <div id="dados">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <?php
                include "conecta.php";
                $sql = "SELECT id, nome, senha, email FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $registro['id'] . "</td>";
                    echo "<td>" . $registro['nome'] . "</td>";
                    echo "<td>" . $registro['email'] . "</td></tr>";
                }
                ?>
            </table>
        </div>
    </main>

</body>

</html>