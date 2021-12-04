<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Workfacilit</title>
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <!-- Só uma imagem -->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="./img/logob_workfacilit_brq.png" width="350" alt="logomarca-workfacilit">
                </a>
            </nav>
        </header>

    </div>
    <div class="container">
        <?php include_once "../app/src/logica.php" ?>
    </div>
    <hr>
    <div id="conteudo">

    </div>

    <script type="text/javascript">
        function disparo(id, message) {
            const values = document.getElementById(id).querySelectorAll('input');

            const inputValues = Array.from(values).map(function(el) {
                return {
                    id: el.dataset.id,
                    default: el.value,
                }

            });

            const content = message.replace(/{{((?:[^}]|}[^}])+)}}/g, function(_, id) {
                const inputValue = inputValues.find(item => item.id === id)
                return inputValue.default;
            });

            const result = {
                "mensagem_id": "171788294",
                "contato": "551150295555",
                "remetente": "mesa_corretora",
                "mensagem": {
                    "mensagem_ativa": "p_tirar_duvidas",
                    "parametros": inputValues
                }
            }

            $('#conteudo').append(JSON.stringify(result));
        }

       
    </script>
</body>

</html>