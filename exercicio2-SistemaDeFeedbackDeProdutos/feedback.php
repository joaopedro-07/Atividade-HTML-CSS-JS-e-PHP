<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Sistema de Feedback de Produtos</title>
</head>
<body>
    <main>
        <h1>Avaliação de Produto</h1>
        <form id="feedbackForm" action="processar_feedback.php" method="post">
            <h2>Preencha os campos para enviar seu feedback</h2>
            <label for="input-produto">Nome do produto:</label>
            <input id="input-produto" type="text" name="produtoInserido" required>
            
            <label for="">Nota:</label>
            <div class="rating">
                <input type="radio" name="star" id="star1" value="5"><label for="star1"></label>
                <input type="radio" name="star" id="star2" value="4"><label for="star2"></label>
                <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
                <input type="radio" name="star" id="star4" value="2"><label for="star4"></label>
                <input type="radio" name="star" id="star5" value="1"><label for="star5"></label>
            </div>
            <span id="error-message" style="color: #FF2C20; display: none; margin-top: -20px; margin-bottom: 10px;">Por favor, selecione uma nota.</span>

            <label id="label-coment" for="input-coment">Comentário:</label>
            <textarea id="input-coment" name="comentarioInserido" required></textarea>

            
            <button type="submit">Enviar feedback</button>
        </form>
    </main>

    <script>
        document.getElementById('feedbackForm').addEventListener('submit', function(event) {
            // Verificar se alguma estrela está marcada
            var estrelas = document.getElementsByName('star');
            var algumaEstrelaSelecionada = false;

            for (var i = 0; i < estrelas.length; i++) {
                if (estrelas[i].checked) {
                    algumaEstrelaSelecionada = true;
                    break;
                }
            }

            if (!algumaEstrelaSelecionada) {
                // Impedir o envio do formulário se nenhuma estrela estiver marcada
                event.preventDefault();
                document.getElementById('error-message').style.display = 'block';
            } else {
                document.getElementById('error-message').style.display = 'none';
            }
        });
    </script>
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
        color: #FF2C20;
    }

    form {
        padding: 10px;
        display: flex;
        flex-direction: column;
        width: 40%;
        margin-top: 30px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.3); /* Fundo branco com opacidade */
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 200px rgba(255, 255, 255, 0.2);
        border: 2px solid darkgreen;
        height: 320px;
    }

    h2 {
        font-size: 24px;
        display: flex;
        justify-content: center;
    }

    label {
        color: black;
        font-size: 17px;
        margin-top: 12px;
    }

    #label-coment {
        margin-top: -10px;
    }

    input, textarea {
        border: 1px solid #dcdcdc;
        border-radius: 3px;
        height: 25px;
        padding-left: 3px;
    }

    #input-coment {
    height: 100px;
    padding-top: 2px;
    resize: none; /* Remove a opção de redimensionar */
    width: 99.3%;
    overflow-wrap: break-word;
    word-break: break-all;
    white-space: pre-wrap;
    font-family: 'Arial';
}

    button {
        height: 50px;
        margin-top: 30px;
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 120px;
        border-radius: 10px;
        background-color: rgb(0, 165, 91);
        border: 2px solid darkgreen;
        font-family: 'Poppins';   
        font-size: 17px;
        color: white;
    }

    .rating {
        transform: translate(-50%, -50%) rotateY(180deg);
        display: flex;
        margin-top: 5px;
        margin-right: 160px;
        margin-left: -200px;
    }

    .rating input {
        display: none;
    }

    .rating label {
        display: block;
        cursor: pointer;
        width: 25px;
    }

    .rating label:before {
        content: '\f005';
        font-family: FontAwesome;
        position: relative;
        display: block;
        font-size: 20px; /* Ajuste o tamanho da estrela */
        color: #0e1316; /* Cor padrão das estrelas (pretas) */
        transition: color 0.2s ease-in-out; /* Transição suave para a mudança de cor */
    }

    .rating label:hover:before,
    .rating label:hover ~ label:before,
    .rating input:checked ~ label:before {
        color: #ffff00; /* Estrelas ficam amarelas no hover ou quando selecionadas */
    }
</style>