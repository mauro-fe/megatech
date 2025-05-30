<!-- Container principal -->
<div class="container-fluid container">
    <div class="swiperCell text-center effect">
        <h2><strong><?= $iphones[1]->marca ?></strong></h2>
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <h3><?= $iphones[1]->nome ?></h3>
                <img src="<?= $iphones[1]->imagem ?>" alt="<?= $iphones[1]->nome ?>" class="img-fluid">
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide ">
                <h3><?= $iphones[2]->nome ?></h3>
                <img src="<?= $iphones[2]->imagem ?>" alt="<?= $iphones[2]->nome ?>" class="img-fluid">
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide ">
                <h3><?= $iphones[3]->nome ?></h3>
                <img src="<?= $iphones[3]->imagem ?>" alt="<?= $iphones[3]->nome ?>" class="img-fluid">
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide ">
                <h3><?= $iphones[4]->nome ?></h3>
                <img src="<?= $iphones[4]->imagem ?>" alt="<?= $iphones[4]->nome ?>" class="img-fluid">
            </div>
        </div>
        <p>Disponível agora com ofertas exclusivas.</p>
        <div class="btn-saiba-mais">
            <a href="#">Saiba mais</a>
        </div>
    </div>


    <!-- Grid de produtos -->
    <section class="cell row g-3 mb-3">
        <div class="col-md-6">
            <div class="cell-container effect-left">
                <h2><?= $xiaomis[1]->marca ?></h2>
                <h3><?= $xiaomis[1]->nome ?></h3>
                <img src="<?= $xiaomis[1]->imagem ?>" alt="<?= $xiaomis[1]->nome ?>" class="mt-2">
                <p class="m-3">A prova de água e resistente à queda.</p>
                <div class="btn-saiba-mais">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cell-container effect-right">
                <h2><?= $realmes[1]->marca ?></h2>
                <h3><?= $realmes[1]->nome ?></h3>
                <img src="<?= $realmes[1]->imagem ?>" alt="<?= $realmes[1]->nome ?>" class="mt-2">
                <p class="m-3">Com o processador Snapdragon 8 Elite.</p>
                <div class="btn-saiba-mais">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>
    <section class="hero d-flex align-items-center justify-content-center flex-column effect">
        <h2><?= $samsungs[1]->marca ?></h2>
        <h3><?= $samsungs[1]->nome ?></h3>
        <img src="<?= $samsungs[1]->imagem ?>" alt="<?= $samsungs[1]->nome ?>">
        <p class="m-3">A câmera com o melhor zoom.</p>
        <div class="btn-saiba-mais">
            <a href="#">Saiba mais</a>
        </div>
    </section>

    <div class="mt-5 mb-5 carousel effect">
        <h2 class="text-center">Acessórios</h2>
        <!-- Swiper HTML -->
        <div class="swiper mySwiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fone Bluetooth</h5>
                            <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                        <div class="card-body text-center">
                            <h5 class="card-title">Capinha iPhone</h5>
                            <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fone Bluetooth</h5>
                            <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                        <div class="card-body text-center">
                            <h5 class="card-title">Capinha iPhone</h5>
                            <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="./assets/img/carregador-iphone-tipo-c.jpg" class="card-img-top" alt="Fone">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fone Bluetooth</h5>
                            <p class="card-text">Som de alta qualidade e bateria duradoura.</p>
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="./assets/img/carregador-samsung-tipo-c.webp" class="card-img-top" alt="Capinha">
                        <div class="card-body text-center">
                            <h5 class="card-title">Capinha iPhone</h5>
                            <p class="card-text">Proteção elegante e discreta para seu aparelho.</p>
                            <a href="#" class="btn-comprar">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
    <section class="assistencia-section effect">
        <h2>Assistência Técnica Especializada</h2>
        <p class="text-center text-muted m-2">Consertos rápidos, peças originais e garantia estendida para seu
            smartphone.</p>
        <img src="./assets/img/assistencia-tecnica.png" alt="Assitência Tecnica" class="w-100">
        <div class="row g-4 details">
            <div class="col-md-4">
                <div class="assistencia-box text-center">
                    <i class="fas fa-tools"></i>
                    <h5 class="mt-3">Reparos em celulares</h5>
                    <p>Troca de tela, bateria, conector de carga, botão power entre outros serviços.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="assistencia-box text-center">
                    <i class="fas fa-shield-alt"></i>
                    <h5 class="mt-3">Garantia e segurança</h5>
                    <p>Peças com garantia de até 12 meses. Serviço com nota fiscal e suporte técnico.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="assistencia-box text-center">
                    <i class="fas fa-headset"></i>
                    <h5 class="mt-3">Atendimento especializado</h5>
                    <p>Equipe treinada e pronta para tirar dúvidas e oferecer o melhor suporte.</p>
                </div>
            </div>
        </div>
        <div class="btn-saiba-mais">
            <a href="#">Saiba mais</a>
        </div>
    </section>
    <!-- Swiper HTML -->
    <section class="avaliacoes mt-5 mb-5">
        <h2 class="text-center mb-2">O que dizem nossos clientes</h2>
        <div class="swiper mySwiper avaliacoesSwiper">
            <div class="swiper-wrapper effect">

                <!-- Avaliação 1 -->
                <div class="swiper-slide">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="avatar m-3" alt="Maria">
                            <div class="stars mb-2">★★★★★</div>
                            <p class="card-text">"Comprei uma película e fui muito bem atendida. Chegou rápido e com
                                qualidade!"</p>
                            <h5 class="card-title mt-3 mb-1">Maria Oliveira</h5>
                            <small class="text-muted">Cliente de São Paulo</small>
                        </div>
                    </div>
                </div>

                <!-- Avaliação 2 -->
                <div class="swiper-slide">
                    <div class="card text-center">

                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" class="avatar m-3" alt="João">
                            <div class="stars mb-2">★★★★☆</div>
                            <p class="card-text">"Produtos bons e originais, recomendo! Só achei o frete um pouco
                                demorado."</p>
                            <h5 class="card-title mt-3 mb-1">João Lima</h5>
                            <small class="text-muted">Comprador via Instagram</small>
                        </div>
                    </div>
                </div>

                <!-- Avaliação 3 -->
                <div class="swiper-slide">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="avatar m-3" alt="Ana">
                            <div class="stars mb-2">★★★★★</div>
                            <p class="card-text">"Atendimento incrível, resolveram minha dúvida pelo WhatsApp em
                                minutos."</p>
                            <h5 class="card-title mt-3 mb-1">Ana Paula</h5>
                            <small class="text-muted">Cliente fiel</small>
                        </div>
                    </div>
                </div>

                <!-- Avaliação 4 -->
                <div class="swiper-slide">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="avatar m-3" alt="Ana">
                            <div class="stars mb-2">★★★★★</div>
                            <p class="card-text">"Atendimento incrível, resolveram minha dúvida pelo WhatsApp em
                                minutos."</p>
                            <h5 class="card-title mt-3 mb-1">Ana Paula</h5>
                            <small class="text-muted">Cliente fiel</small>
                        </div>
                    </div>
                </div>

                <!-- Avaliação 5 -->
                <div class="swiper-slide">
                    <div class="card text-center">
                        <div class="card-body"> <img src="https://randomuser.me/api/portraits/women/45.jpg"
                                class="avatar m-3" alt="Ana">
                            <div class="stars mb-2">★★★★★</div>
                            <p class="card-text">"Atendimento incrível, resolveram minha dúvida pelo WhatsApp em
                                minutos."</p>
                            <h5 class="card-title mt-3 mb-1">Ana Paula</h5>
                            <small class="text-muted">Cliente fiel</small>
                        </div>
                    </div>
                </div>

                <!-- Avaliação 6 -->
                <div class="swiper-slide">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="avatar m-3" alt="Ana">
                            <div class="stars mb-2">★★★★★</div>
                            <p class="card-text">"Atendimento incrível, resolveram minha dúvida pelo WhatsApp em
                                minutos."</p>
                            <h5 class="card-title mt-3 mb-1">Ana Paula</h5>
                            <small class="text-muted">Cliente fiel</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 4, // mostra 3, mas centralizado
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            }
        }
    });
    const swiperCell = new Swiper('.swiperCell', {
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        fadeEffect: {
            crossFade: true
        }
    });
</script>