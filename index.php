<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body style="padding: 20px;">
    <h1 class="h2">Abas dinâmicas com php + bootstrap</h1>
    <h2 class="h2">Dynamic tabs with php + bootstrap</h2>

    <?php
    // Dados em php (título e conteúdo)
    // Data in php (title and content)
    $data = [
        ["title" => "Biologia", "body" => "Ciência que estuda a vida dos seres vivos."],
        ["title" => "História", "body" => "Estudo do homem ao longo do tempo."],
        ["title" => "Informática", "body" => "Estudo do processamento automático da informação."],
    ];
    ?>

    <!-- Cabeçalho das abas -->
    <!-- Tab headers -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php
        //Title
        foreach ($data as $i => $content) :
        ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link <?= $i == 0 ? "active" : "" ?>" id="<?= $i ?>-tab" data-bs-toggle="tab" data-bs-target="#tab-<?= $i ?>" type="button" role="tab" aria-controls="<?= $i ?>" aria-selected="<?= ($i == 0 ? "true" : "false") ?>">
                    <?= $content["title"] ?>
                </button>
            </li>
        <?php
        endforeach;
        ?>
    </ul>

    <!-- Corpo das abas -->
    <!-- Tab body -->
    <div class="tab-content" id="myTabContent">
        <?php
        //Body
        foreach ($data as $i => $content) :
        ?>
            <div class="tab-pane fade <?= $i == 0 ? "show active" : "" ?>" id="tab-<?= $i ?>" role="tabpanel" aria-labelledby="<?= $i ?>-tab">
                <?= $content["body"] ?>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>