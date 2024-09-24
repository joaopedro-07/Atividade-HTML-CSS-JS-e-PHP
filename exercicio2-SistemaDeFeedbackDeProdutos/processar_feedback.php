<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Obrigado pelo feedback!</title>
</head>
<body>
    <main>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $produto = $_POST['produtoInserido'];
                $nota = $_POST['star'];
                $comentario = $_POST['comentarioInserido'];

                echo "<h1>Obrigado! Seu feedback foi enviado.</h1>";
                echo "<div>";
                echo "<h2><strong>Nome do produto:</strong> $produto</h2>";
                echo "<h2><strong>Nota:</strong> $nota</h2>";
                echo "<h2><strong>Comentário:</strong> $comentario</h2>";
                echo "</div>";
            }
            else {
                echo "<h1>Método do formulário não é 'post'</h1>";
            }
        ?>
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

    div {
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 40%;
        margin-top: 30px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.3); /* Fundo branco com opacidade */
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 200px rgba(255, 255, 255, 0.2);
        border: 2px solid darkgreen;
    }

    h1 {
        margin-top: 200px;
        color: #FF2C20;
    }

    h2 {
        font-weight: 400;
        max-width: 100%;
        overflow-wrap: break-word;
        word-break: break-all;
        white-space: normal;
    }
</style>