<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Senac</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,700;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.mask.js"></script>
</head>
<body>
    <section>
        <div class="container">
            <div class="imgSenac">
                <img src="images\logoSenac.png" alt="">
            </div>
        </div>
    </section>
    <section id="formSection">
        <div class="container">
            <div class="titleForm">
                <h3>Cadastrar Informações</h3>
            </div>
            <div class="boxForm">
                <form action="insert.php" method="post">
                    <div class="form__data">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" name="nome" id="nome" placeholder="Insira seu nome completo">
                    </div>

                    <div class="form__data">
                        <label for="idade">Idade:</label>
                        <input type="number" name="idade" id="idade" placeholder="Insira sua idade">
                    </div>

                    <div class="form__data">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" class="phone" placeholder="(xx) xxxxx-xxxx">
                    </div>

                    <div class="form__data">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Insira seu e-mail">
                    </div>

                    
                    <div class="form__data ">
                        <input type="submit" name="enviar" id="enviar" class="submitBtn">
                    </div>
                    
                    <div class="form__data" style="flex-direction: row ;">
                        <input type="checkbox" name="lgpd" id="lgpd">
                        <label for="lgpd">Ao assinar este termo o TITULAR concorda que a CONTROLADORA, proceda com o tratamento de seus dados.</label>
                    </div>


                </form>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $('.phone').mask('(35) 0000-0000');
        })

    </script>
</body>
</html>