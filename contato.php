<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMInformatica</title>
    <link rel="shortcut icon" href="images/DALL·E 2024-10-24 10.15.34 - A conceptual black and white image representing the field of informatics, covering development, networks, and security, with the initials 'JM' integra.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="./">JMInformatica</a>
            </div>
            <ul class="menu" id="menu-site">
                <li><a href="./">Home</a></li>
                <li><a href="sobre-empresa.php">Sobre Empresa</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            <div class="menu-btn" id="menu-btn">
                <i class="fa-solid fa-bars fa-1x" id="menu-icon"></i>
            </div>
        </div>
    </nav>

    <section class="contact">
        <div class="max-width">
            <h2 class="title">Contato</h2>
            <div class="contact-content">
                <div class="column left">
                    <p>
                        É com imensa satisfação que a JM Informatica está à disposição para tirar dúvidas, receber solicitações de software ou sugestões.
                    </p>
                    <p>
                    Você pode falar conosco pelo telefone
                        <?php
                        $whats = "(18) 12345-6789";
                        $number = preg_replace("/[^0-9]/", "",$whats);?>
 
                        <a href="https://wa.me/55<?php echo $whats; ?>" target="_blank">(18)99672-0701</a>
                        ou enviar um e-mail para JM@gmail.com. Também é possível utilizar o formulário de contato ao lado:
                            <br>
                            <br>
                    </p>
                    </p>

                    <div class="icons">
                        <div class="row">
                            <i class="fa-solid fa-user"></i>
                            <div class="info">
                                <div class="head">Empresa</div>
                                <div class="sub-title">JM Informatica</div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="info">
                                <div class="head">Endereço</div>
                                <div class="sub-title">Rua Tamarindo Abacaxi</div>
                            </div>
                        </div>

                        <div class="row">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="info">
                                <div class="head">E-mail</div>
                                <div class="sub-title">JMInformatica@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column right">
                    <div class="text">Mensagem de contato</div>
                    <form action="">
                        <div class="field nome">
                            <input type="text" placeholder="Nome" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="E-mail" required>
                        </div>
                        <div class="field">
                            <textarea placeholder="Assunto" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="js/custom.js"></script>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <span>Criado por <a href="">JM Informatica</a></span>
    </footer>
</body>

</html>
