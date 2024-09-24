<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <main>
        <h1>Faça seu cadastro!</h1>
        <form action="cadastrar.php" method="post">
            <h2>Insira seus dados nos campos abaixo</h2>
            <label for="">Nome:</label>
            <input type="text" name="nomeInserido" required>
            <label for="">Email:</label>
            <input type="email" name="emailInserido" required>
            <label for="">Telefone:</label>
            <input type="number" name="telefoneInserido" required>
            <button type="submit">Concluir cadastro</button>
        </form>
    </main>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: none;
    }

    main {
        background-color: rgb(0, 100, 55);
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins';
    }

    h1 {
        margin-top: 120px;
        color: #FF2C20
    }

    form {
        padding: 10px;
        display: flex;
        flex-direction: column;
        width: 25%;
        margin-top: 30px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.3); /* Fundo branco com opacidade */
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 200px rgba(255, 255, 255, 0.2);
        border: 2px solid darkgreen;
        height: 300px;
    }

    h2 {
        font-size: 18px;
        display: flex;
        justify-content: center;
    }

    label {
        color: white;
        font-size: 17px;
        margin-top: 12px;
    }

    input {
        border: 1px solid #dcdcdc;
        border-radius: 3px;
        height: 24px;
        padding-left: 3px;
    }

    button {
        height: 50px;
        margin-top: 30px;
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 75px;
        border-radius: 10px;
        background-color: rgb(0, 165, 91);
        border: 2px solid darkgreen;
        font-family: 'Poppins';   
        font-size: 17px;
        color: white;
    }
</style>