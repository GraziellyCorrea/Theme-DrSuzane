<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dra Suzana Alves - Clyra Style</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

    <header>
        <nav class="navbar-floating">
            <a href="#" class="logo">Dra Suzana Alves</a>
            <ul class="nav-links">
                <li><a href="#">Casa</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#contatos">Contatos</a></li>
            </ul>
            <a href="#" class="btn-appointment">Marque uma reunião</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dra suzana.jpg" class="circle-img" alt="Dra. Suzana">
            </div>
            <div class="hero-text">
                <span>BEM-VINDO</span>
                <h1>Sua beleza  <i>Natural</i> <br> Realçada</h1>
                <p>Especialistas em realçar sua beleza natural com tratamentos premium.</p>
                <a href="#sobre" class="btn-discover">Descubra Mais</a>
            </div>
        </section>

        <section id="sobre" class="about-section">
            <div class="about-container">
                <div class="about-images">
                    <div class="img-main">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pac1.png" alt="Tratamento facial">
                    </div>
                </div>
                <div class="about-content">
                    <span class="section-subtitle">QUEM SOMOS</span>
                    <h2 class="section-title">Amor próprio e confiança em cada detalhe.</h2>
                    <p class="section-description">
                        Acreditamos que sua saúde da pele é o primeiro passo para a autoconfiação. Nossa missão é oferecer resultados naturais e duradouros, tratando cada paciente como unico.
                    <div class="contadores">
                        <div class="contador-item"><b>10+</b> <span>Anos</span></div>
                        <div class="contador-item"><b>15+</b> <span>Serviços</span></div>
                        <div class="contador-item"><b>99%</b> <span>Satisfação</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="secao-servicos">
            <div class="container">
                <span class="section-subtitle">NOSSOS SERVIÇOS</span>
                <h2 class="section-title">Tratamentos sob medida</h2>
                <div class="grid-servicos">
                    <div class="card-servico">
                        <h3>Tratamento Facial</h3>
                        <p>Protocolos exclusivos para revitalização e limpeza profunda.</p>
                        <a href="#" class="link-servico">Saber Mais →</a>
                    </div>
                    <div class="card-servico destaque">
                        <h3>Tratamento de Acne</h3>
                        <p>Tecnologia avançada para tratar a oleosiade e suavizar marcas.</p>
                        <a href="#" class="link-servico">Saber Mais →</a>
                    </div>
                    <div class="card-servico">
                        <h3>Terapia Anti-Idade</h3>
                        <p>Bioestimuladores técnicas para preservar a firmeza e contorno facial.</p>
                        <a href="#" class="link-servico">Saber Mais →</a>
                    </div>
                    <div class="card-servico">
                        <h3>Tratamento Labial</h3>
                        <p>Lábios saudáveis,hidratados e com volume natural.</p>
                        <a href="#" class="link-servico">Saber Mais →</a>
                    </div>
                    <div class="card-servico destaque">
                        <h3>Tratamento Labial</h3>
                        <p>Hidratação profunda e revitalização para lábios saudáveis.</p>
                        <a href="#" class="link-servico">Saber Mais →</a>
                    </div>
                    <div class="card-servico">
                        <h3>Cuidado Corporal</h3>
                        <p>Tratamentos personalizados para a saúde e estética do corpo.</p>
                        <a href="#" class="link-servico">Saber Mais →</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="escolha-section">
    <div class="container">
        <span class="section-subtitle">POR QUE NOS ESCOLHER</span>
        <h2 class="section-title">Comprometido com a Saúde <br> da Sua Pele</h2>
        <p class="section-description-center">
            Oferecemos um atendimento humanizado com protocolos que unem tecnologia e <br> bem-estar para resultados duradouros e naturais.
        </p>

        <div class="escolha-grid">
            <div class="escolha-col">
                <div class="escolha-card">
                    <div class="escolha-icon"><i class="fas fa-magic"></i></div>
                    <div class="escolha-info">
                        <h4>Tratamentos Personalizados</h4>
                        <p>Protocolos únicos criados especificamente para as necessidades da sua pele.</p>
                    </div>
                </div>
                <div class="escolha-card">
                    <div class="escolha-icon"><i class="fas fa-user-md"></i></div>
                    <div class="escolha-info">
                        <h4>Especialistas Qualificados</h4>
                        <p>Equipe treinada nas mais modernas técnicas de estética avançada.</p>
                    </div>
                </div>
                <div class="escolha-card">
                    <div class="escolha-icon"><i class="fas fa-vial"></i></div>
                    <div class="escolha-info">
                        <h4>Produtos Premium</h4>
                        <p>Utilizamos apenas marcas renomadas e ativos de alta performance.</p>
                    </div>
                </div>
            </div>

            <div class="escolha-img-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pac3.png" alt="Equipe Dra Suzana">
            </div>

            <div class="escolha-col">
                <div class="escolha-card">
                    <div class="escolha-icon"><i class="fas fa-microchip"></i></div>
                    <div class="escolha-info">
                        <h4>Tecnologia Moderna</h4>
                        <p>Equipamentos de última geração para maior segurança e eficácia.</p>
                    </div>
                </div>
                <div class="escolha-card">
                    <div class="escolha-icon"><i class="fas fa-spa"></i></div>
                    <div class="escolha-info">
                        <h4>Conforto e Cuidado</h4>
                        <p>Um ambiente acolhedor planejado para sua total tranquilidade.</p>
                    </div>
                </div>
                <div class="escolha-card">
                    <div class="escolha-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="escolha-info">
                        <h4>Resultados Comprovados</h4>
                        <p>Foco total na entrega de resultados que superam expectativas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-final-equal">
    <div class="cta-container-equal">
        <div class="cta-card-equal">
            <span class="cta-tag-equal">COMECE</span>
            <h2 class="cta-titulo-equal">Dê o primeiro passo para e pele que você sempre sonhou.</h2>
            <a href="#" class="cta-btn-equal">Entre Em Contato Conosco</a>
        </div>
    </div>
</section>
<section id="depoimentos" class="secao-depoimentos">
    <div class="container-dep">
        <span class="subtitle-center">DEPOIMENTOS</span>
        <h2 class="title-center">O que Nossos Clientes Dizem</h2>
        <p class="desc-center">A Dr. Suzana tem um olhar único para a naturalidade. Sai do consultório me sentindo eu mesmo, so que muito mais descansada e radiante.</p>

        <div class="grid-depoimentos">
            <div class="card-depoimento grande">
                <p>"O atendimento é humanizado desde a recepção. Me senti segura em cada etapa do tratamento."</p>
                <div class="autor-dep">
                    <img src="https://i.pravatar.cc/150?u=olivia" alt="Olivia Carter">
                    <div>
                        <h4>Olivia Carter</h4>
                        <span>Cliente</span>
                    </div>
                    <i class="fas fa-quote-right aspas"></i>
                </div>
            </div>

            <div class="card-depoimento grande">
                <p>"O que mais me encantou no trabalho de Dr Suzana foi a naturalidade. Eu tinha medo de ficar com o rosto "congelado"mas ela realçou meus traços de um jeito tão sutil que todos dizem que estou mais descansada, sem nem perceberem que fiz um procedimento.</p>
                <div class="autor-dep">
                    <img src="https://i.pravatar.cc/150?u=sophia" alt="Sophia Bennett">
                    <div>
                        <h4>Sophia Bennett</h4>
                        <span>Cliente</span>
                    </div>
                    <i class="fas fa-quote-right aspas"></i>
                </div>
            </div>

            <div class="card-depoimento">
                <p>"Desde a primeira consulta, senti que não era apenas mais um protocolo. A Dra. Suzana ouviu minhas inseguranças e explicou cada etapa com muita clareza. O ambiente é acolhedor e a equipe é extremamente atenciosa. Recomendo de olhos fechados!"</p>
                <div class="autor-dep">
                    <img src="https://i.pravatar.cc/150?u=emma" alt="Emma Williams">
                    <div>
                        <h4>Emma Williams</h4>
                        <span>Cliente</span>
                    </div>
                    <i class="fas fa-quote-right aspas"></i>
                </div>
            </div>

            <div class="card-depoimento">
                <p>"Sofri anos com manchas de acne e já tinha tentado de tudo. Com o protocolo personalizado que a Dra. montou para mim, minha pele mudou completamente em poucos meses. Hoje me sinto segura até para sair sem maquiagem"</p>
                <div class="autor-dep">
                    <img src="https://i.pravatar.cc/150?u=chloe" alt="Chloe Anderson">
                    <div>
                        <h4>Chloe Anderson</h4>
                        <span>Cliente</span>
                    </div>
                    <i class="fas fa-quote-right aspas"></i>
                </div>
            </div>

            <div class="card-depoimento">
                <p>"A gente sabe que o tempo passa, mas a Dra. Suzana faz com que a gente envelheça com elegância. Os procedimentos de estímulo de colágeno devolveram a firmeza que eu achava que tinha perdido. Me sinto na minha melhor versão aos 45 anos."</p>
                <div class="autor-dep">
                    <img src="https://i.pravatar.cc/150?u=isabella" alt="Isabella Morgan">
                    <div>
                        <h4>Isabella Morgan</h4>
                        <span>Cliente</span>
                    </div>
                    <i class="fas fa-quote-right aspas"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secao-faq">
    <div class="container-faq">
        <div class="faq-imagem">
            <img src="<?php echo get_template_directory_uri(); ?>/images/dra123.jpg" alt="foto da dra">
        </div>

        <div class="faq-conteudo">
            <span class="faq-tag">PERGUNTA FREQUENTE</span>
            <h2 class="faq-titulo">Dúvidas frequentes sobre sua jornada conosco"</h2>
            <p class="faq-desc">Tudo começa com uma consulta de avaliação detalhada. Analisamos seu histórico, tipo de pele e objetivos específicos para criar um plano de tratamento personalizado, garantindo que você receba exatamente o que sua pele precisa para brilhar.</p>

            <div class="acordeao">
                <details open>
                    <summary>O que diferencia seus cuidados com a pele dos outros? <i class="fas fa-chevron-down"></i></summary>
                    <div class="resposta">
                        Nossa abordagem combina cuidados especializados, tecnologia segura e tratamentos personalizados para entregar resultados duradouros e naturais.
                    </div>
                </details>

                <details>
                    <summary>Como saber qual tratamento é o mais adequado para minha pele? <i class="fas fa-chevron-down"></i></summary>
                    <div class="resposta">
                        Realizamos uma avaliação detalhada na sua primeira consulta para entender suas necessidades específicas.
                    </div>
                </details>

                <details>
                    <summary>Os produtos e procedimentos são seguros para peles sensíveis? <i class="fas fa-chevron-down"></i></summary>
                    <div class="resposta">
                        Sim, todos os nossos protocolos são testados e adaptados para diferentes tipos de sensibilidade.
                    </div>
                </details>

                <details>
                    <summary>Quanto tempo leva para ver resultados? <i class="fas fa-chevron-down"></i></summary>
                    <div class="resposta">
                        Isso varia por tratamento, mas muitos clientes notam melhora já na primeira sessão.
                    </div>
                </details>
                
                <details>
                    <summary>Preciso de uma consulta antes de começar o tratamento? <i class="fas fa-chevron-down"></i></summary>
                    <div class="resposta">
                        Sim, a consulta inicial é fundamental para garantir a sua segurança e eficácia do procedimento.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<section class="secao-blog">
    <div class="container-blog">
        <div class="blog-header">
            <div class="blog-header-texto">
                <span class="blog-tag">POST NO BLOG</span>
                <h2 class="blog-titulo-principal">Percepções e Inspiração</h2>
            </div>
            <a href="#" class="btn-ver-todos">Saiba Mais <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="blog-grid">
            <article class="card-blog">
                <div class="blog-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/OIP.png" alt="Guia de Dermatologia">
                </div>
                <div class="blog-info">
                    <span class="blog-data"><i class="far fa-calendar"></i> 16 de setembro de 2025</span>
                    <h3>Guia de Dermatologia para Escolher o Protetor Solar Certo</h3>
                    <a href="#" class="blog-link-btn">Saiba Mais</a>
                </div>
            </article>

            <article class="card-blog">
                <div class="blog-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Tratramento de Cicatrizes.jpg" alt="Tratamentos para Cicatrizes">
                </div>
                <div class="blog-info">
                    <span class="blog-data"><i class="far fa-calendar"></i> 16 de setembro de 2025</span>
                    <h3>Melhores Tratamentos Dermatológicos para Cicatrizes de Acne Teimosas</h3>
                    <a href="#" class="blog-link-btn">Saiba Mais</a>
                </div>
            </article>

            <article class="card-blog">
                <div class="blog-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/OIP2.png" alt="Segredos de Beleza">
                </div>
                <div class="blog-info">
                    <span class="blog-data"><i class="far fa-calendar"></i> 16 de setembro de 2025</span>
                    <h3>Segredos de Beleza para Manter uma Pele Radiante e Saudável</h3>
                    <a href="#" class="blog-link-btn">Saiba Mais</a>
                </div>
            </article>
        </div>
    </div>
</section>

<footer class="footer-principal">
    <div class="footer-topo">
        <div class="footer-container flex-topo">
            <div class="footer-intro">
                <h2 class="footer-frase">Realçando sua essência, preservando sua história.</h2>
                <p>Mais do que estética, oferecemos um convite ao autocuidado. Nossa missão é realçar sua beleza única através de protocolos científicos e um olhar humanizado, garantindo resultados que respeitam a sua essência.</p>
            </div>
            <div class="footer-redes">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-meio">
        <div class="footer-container grid-footer">
            <div class="col-footer">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-footer-img">
                    <span class="logo-texto-reserva">Dra Suzana Alves</span>
                </div>
                <p>Receba dicas exclusivas de autocuidado.</p>
                <div class="newsletter-box">
                    <input type="email" placeholder="Seu endereço de e-mail">
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="col-footer">
                <h3>Link Rápido</h3>
                <ul>
                    <li><a href="#">Casa</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>

            <div class="col-footer">
                <h3>Serviços</h3>
                <ul>
                    <li><a href="#">Tratamento Facial</a></li>
                    <li><a href="#">Tratamento da Acne</a></li>
                    <li><a href="#">Terapia Anti-Envelhecimento</a></li>
                    <li><a href="#">Tratamento de Clareamento</a></li>
                </ul>
            </div>

            <div class="col-footer">
                <h3>Entre em contato conosco</h3>
                <ul class="info-contato">
                    <li><i class="far fa-envelope"></i> drasuzana</li>
                    <li><i class="fas fa-phone-alt"></i> +55988472768</li>
                    <li><i class="fas fa-map-marker-alt"></i> Manaus</li>
                    <li><i class="far fa-clock"></i> 09h00 - 21h00</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copy">
        <p>&copy; 2024 Dra Suzana Alves. Todos os direitos reservados.</p>
    </div>
</footer>
<main>
        <footer id="contatos">
        <div class="container footer-content">
            <div class="footer-brand">
                <a href="#" class="logo">Dra Suzana Alves</a>
                <p>Realçando sua essência com naturalidade.</p>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Dra Suzana Alves. Todos os direitos reservados.</p>
        </div>
    </footer>
</main>

</body>
</html>