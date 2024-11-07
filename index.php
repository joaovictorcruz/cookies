<?php
session_start();

if (isset($_POST['save_preferences'])) {
    setcookie('background_color', $_POST['background_color'], time() + 120, "/");
    setcookie('font_size', $_POST['font_size'], time() + 120, "/");
    $_SESSION['background_color'] = $_POST['background_color'];
    $_SESSION['font_size'] = $_POST['font_size'];
} else {
    if (isset($_COOKIE['background_color'])) {
        $_SESSION['background_color'] = $_COOKIE['background_color'];
    }

    if (isset($_COOKIE['font_size'])) {
        $_SESSION['font_size'] = $_COOKIE['font_size'];
    }
}

$background_color = isset($_SESSION['background_color']) ? $_SESSION['background_color'] : '#ffffff';
$font_size = isset($_SESSION['font_size']) ? $_SESSION['font_size'] : '16px';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock in Rio</title>
    <style>
        html {
            font-size: <?php echo $font_size; ?>;
        }
        body {
            background-color: <?php echo $background_color; ?>;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        #preferences {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
        #preferences select, #preferences button {
            margin: 5px;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            color: #333;
            cursor: pointer;
        }
        #preferences button:hover {
            background-color: #ff7f50;
            color: #fff;
        }
        #content {
            margin-top: 80px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        h2 {
            font-size: 28px;
            color: #ff7f50;
            margin-top: 30px;
        }
        p {
            line-height: 1.6;
            color: #444;
            font-size: inherit;
        }
        .highlight {
            color: #ff7f50;
            font-weight: bold;
        }
        .section {
            margin-bottom: 40px;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 50px;
            color: #777;
        }
    </style>
</head>
<body>
    <div id="preferences">
        <form method="POST">
            <label for="background_color">Cor de fundo:</label>
            <select name="background_color" id="background_color">
                <option value="#ffffff" <?php if ($background_color == '#ffffff') echo 'selected'; ?>>Branco</option>
                <option value="#ff0000" <?php if ($background_color == '#ff0000') echo 'selected'; ?>>Vermelho</option>
                <option value="#0000ff" <?php if ($background_color == '#0000ff') echo 'selected'; ?>>Azul</option>
                <option value="#00ff00" <?php if ($background_color == '#00ff00') echo 'selected'; ?>>Verde</option>
            </select>
            <br>
            <label for="font_size">Tamanho da fonte:</label>
            <select name="font_size" id="font_size">
                <option value="14px" <?php if ($font_size == '14px') echo 'selected'; ?>>14px</option>
                <option value="16px" <?php if ($font_size == '16px') echo 'selected'; ?>>16px</option>
                <option value="18px" <?php if ($font_size == '18px') echo 'selected'; ?>>18px</option>
                <option value="20px" <?php if ($font_size == '20px') echo 'selected'; ?>>20px</option>
            </select>
            <br>
            <button type="submit" name="save_preferences">Salvar Preferências</button>
        </form>
    </div>

    <div id="content">
        <h1>Rock in Rio 2024</h1>
        
        <div class="section">
            <h2>O Maior Festival de Música do Mundo</h2>
            <p>O <span class="highlight">Rock in Rio</span> é um dos festivais de música mais icônicos do mundo. Em 2024, o evento celebrará mais de 30 anos de história, reunindo fãs de todos os cantos do planeta. O festival acontece no Brasil, mas com um alcance internacional, trazendo artistas e públicos de diversos lugares.</p>
            <p>Em 2024, o festival traz uma programação diversificada, com grandes nomes do rock, pop, eletrônica, e até música brasileira. Artistas como <span class="highlight">Lizzo</span>, <span class="highlight">Billie Eilish</span>, e as lendas do <span class="highlight">Queen</span> estarão no palco, enquanto milhares de fãs cantam e dançam em um ambiente de pura energia.</p>
        </div>

        <div class="section">
            <h2>O Impacto Cultural do Evento</h2>
            <p>O Rock in Rio não é apenas um festival de música, mas um evento cultural que impacta positivamente a sociedade. Através de sua plataforma, o evento busca promover a sustentabilidade, a inclusão e a educação musical para as novas gerações.</p>
            <p>Em edições anteriores, o festival também foi palco para importantes discussões sobre questões sociais e ambientais. A edição de 2024 seguirá com este compromisso, oferecendo espaços para conscientização e ações de apoio à preservação ambiental e à diversidade.</p>
        </div>

        <div class="section">
            <h2>Sobre o Rock in Rio</h2>
            <p>O Rock in Rio começou em 1985, idealizado pelo empresário Roberto Medina, e desde então tem sido uma das maiores celebrações de música ao vivo do planeta. Com edições em diversos países, incluindo Portugal, Espanha e Estados Unidos, o festival tem sido uma plataforma essencial para artistas e fãs de todo o mundo.</p>
            <p>Nos últimos anos, o evento passou a contar com diversas inovações tecnológicas, como transmissões ao vivo em alta definição e interações digitais com o público, criando uma experiência imersiva tanto para quem está presente quanto para quem assiste de casa.</p>
        </div>

        <div class="footer">
            <p>&copy; 2024 Rock in Rio. Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
