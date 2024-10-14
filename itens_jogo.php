<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do jogo</title>

    <link rel="stylesheet" href="styles.css"> <!-- Arquivo CSS externo -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> <!-- Fonte do Google -->
    <script src="efeito.js" defer></script> <!-- Script JS para o efeito -->
        
    
    <style>
            body {
                background-image: url('img/img113.png');
                color: white; /* Ajusta a cor do texto para branco para melhor contraste */
                font-family: 'Poppins', sans-serif; /* Fonte Google */
                text-align: center;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 50px;
            }

            h2 {
                color: #081D42;
                text-shadow: 0 0 5px rgba(255, 255, 255, 0.5),
                            0 0 10px rgba(255, 255, 255, 0.5),
                            0 0 15px rgba(255, 69, 0, 0.7),
                            0 0 20px rgba(255, 69, 0, 0.7);
                animation: glow 1.5s infinite alternate;
            }

            @keyframes glow {
                0% {
                    text-shadow: 0 0 5px rgba(255, 255, 255, 0.5),
                                0 0 10px rgba(255, 255, 255, 0.5),
                                0 0 15px rgba(0, 255, 255, 0.5),
                                0 0 20px rgba(0, 255, 255, 0.5);
                }
                100% {
                    text-shadow: 0 0 10px rgba(255, 255, 255, 1),
                                0 0 20px rgba(255, 255, 255, 1),
                                0 0 30px rgba(0, 255, 255, 1),
                                0 0 40px rgba(0, 255, 255, 1);
                }
            }
    </style>

</head>
<body>
    <?php
        $json1 = file_get_contents('itens.json'); // carrega o conteúdo do arquivo json "itens.json"

        $itens = json_decode($json1, true); // converte o json em um array associativo, e armazena os valores na variável $skills

        echo "<h1>Detalhes do jogo</h1>";

        // print da "historia", contida em "itens.json"
        echo "<h2>1. História</h2>";
        foreach ($itens['historia'] as $historia) { 
            echo $historia['descricao'] . "<br>"; 
        }

        // print dos "personagens", contida em "itens.json"
        echo "<h2>2. Personagens</h2>";
        foreach ($itens['personagens'] as $personagem) { // loop para percorrer cada item contido no json
            echo "<h3>" . $personagem['nome'] . ":</h3>" . $personagem['descricao'] . "<br><br>"; // exibe o NOME e DESCRIÇÃO do item    
            echo "<img src='" . $personagem['imagem'] . "' alt='" . $personagem['nome'] . "' style='width:200px;'><br><br>"; // exibe a imagem associada ao item
        }

        // print das "skills", contida em "itens.json"
        echo "<h2>3. Skills</h2>";
        foreach ($itens['skills'] as $skill) { // loop para percorrer cada item contido no json
            echo "<strong>" . $skill['nome'] . ":</strong><br> " . $skill['descricao'] . "<br>"; // exibe o NOME e DESCRIÇÃO do item    
            echo "<img src='" . $skill['imagem'] . "' alt='" . $skill['nome'] . "' style='width:180px;'><br><br>"; // exibe a imagem associada ao item
        }

        // print das "cenários", contida em "itens.json"
        echo "<h2>4. Cenários</h2>";
        foreach ($itens['cenarios'] as $cenario) { // loop para percorrer cada item contido no json
            echo "<h3>" . $cenario['nome'] . ":</h3>"; 
            echo "<img src='" . $cenario['imagem'] . "' alt='" . $cenario['nome'] . "' style='width:300px;'><br><br>"; // exibe a imagem associada ao item
        }
    ?>

    <br><br><button onclick="window.location.href='inicio.html'" style="color: rgb(255, 255, 255); background-color: #131313c7">Voltar à tela inicial</button>

</body>
</html>