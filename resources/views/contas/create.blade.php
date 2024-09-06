<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
    <style>
        *{
            margin: auto;
            padding: 0;
            box-sizing: border-box;

        }

        body{
            font-family: Arial, sans-serif;
            background-color: black;
            color: #0047ab ;
        }

        h2{
            text-align: center;
            margin-top: 20px;
        }

        form{
            width: 300px;
            margin: 20px auto;
            background-color: black;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px #333;
        }

        label{
            font-size: 16px;
            color: #0047ab ;
        }

        input{
            width: 100%;
            height: 30px;
            padding: 0 5px;
            margin: 5px 0 10px 0;
            border: 1px solid #333;
            border-radius: 5px;
            color: black; /* Cor padrão do texto */
            transition: color 0.3s; /* Transição suave de cor */
            background-color: white; /* Cor padrão do fundo */
            transition: background-color 0.3s; /* Transição suave de cor do fundo */

        
        }



        input:focus {
         color: white ; /* Cor do texto quando o campo está em foco */
         outline: none; /* Remove o contorno padrão quando o campo está em foco */
         background-color: black; /* Cor de fundo quando o campo está em foco */
         border: 2px solid blue; /* Adiciona um contorno azul ao campo quando em foco */
         outline: none; /* Remove o contorno padrão do navegador */
        }

        button{
            width: 100%;
            height: 30px;
            background-color: #0047ab ;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background-color: #4682b4 ;
        }

        a{
            display: block;
            width: 100%;
            height: 30px;
            background-color: black;
            color: #fff;
            text-align: center;
            text-decoration: none;
            line-height: 30px;
            border-radius: 5px;
            margin-top: 20px;
        }

    </style>
    
</head>

<body>

    <a href="{{ route('conta.index')}}">Listar</a><br>

    <h2>Cadastrar a Conta</h2>

    <form action="{{ route('conta.store')}}" method="POST">

        @csrf

        

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome da conta" required><br><br>

        <label>Valor: </label>
        <input type="text" name="valor" id="valor" placeholder="Usar '.' separar real do centavo" required><br><br>

        <label>Vencimento: </label>
        <input type="date" name="vencimento" id="vencimento" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>
