<section class="homeprincipal">
    <div class="part_um">
        <div class="camp_active">
            <ul class="content_camp_active">
                <li>
                    <div class="topo_content">
                        <span>
                            <img src="./assets/icons/fire.png" alt="">
                            Popular</span>

                    </div>


                    <div class="texto_content_middle">
                        <h2>Camp de <span>Natal</span></h2>
                        <p>Participe do Camp de Halloween de League of Legends! Mostre suas habilidades, enfrente outros invocadores e dispute R$900 em prêmios.</p>
                    </div>

                    <div class="balls_bt">
                        <ul class="container_balls">
                            <li>
                                <img src="./assets/logo.png" alt="">
                            </li>
                            <li>
                                <img src="./assets/logo.png" alt="">
                            </li>
                            <li>
                                <img src="./assets/logo.png" alt="">

                            </li>
                        </ul>

                        <ul class="btnss">
                            <li>
                                <span>
                                    <img src="./assets/icons/console.png" alt="">
                                    +90</span>
                            </li>
                            <li>
                                <a href="">
                                    <span>
                                        <img src="./assets/icons/next.png" alt="">
                                        Participar</span>
                                </a>

                            </li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>
        <div class="aboutequipe">
            <ul>
                <li>
                    <div class="icon_s">
                        <img src="./assets/icons/search.png" alt="">
                    </div>
                    <div class="text_container_aboutequipe">
                        <h4>Procure uma Equipe</h4>
                        <p>Se Candidate para entrar em um time</p>
                    </div>
                </li>
                <li>
                    <div class="icon_s">
                        <img src="./assets/icons/healthcare.png" alt="">
                    </div>
                    <div class="text_container_aboutequipe">
                        <h4>Criar uma Equipe</h4>
                        <p>Crie o seu Próprio time para os Campeonatos</p>
                    </div>
                </li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="part_dois">
        <div class="part_dois_left">

            <!-- <div class="slide_camps">
                <ul>
                    <li class="">

                    </li>
                </ul>
            </div> -->

            <div class="containerSlide">

                <div class="splide">
                    <div class="splide__track">

                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="">
                                    <div class="containerImg1">
                                        <p>Uniformes de Limpeza</p>
                                        <p class="pText">Veja mais</p>
                                    </div>
                                </a>
                            </li>

                            <li class="splide__slide">
                                <a href="">
                                    <div class="containerImg2">
                                        <p>Aventais</p>
                                        <p class="pText">Veja mais</p>
                                    </div>
                                </a>
                            </li>

                            <li class="splide__slide">
                                <a href="">
                                    <div class="containerImg3">
                                        <p>Api's</p>
                                        <p class="pText">Veja mais</p>
                                    </div>
                                </a>
                            </li>

                            <li class="splide__slide">
                                <a href="">
                                    <div class="containerImg4">
                                        <p>Chapéus Bandadas</p>
                                        <p class="pText">Veja mais</p>
                                    </div>
                                </a>
                            </li>

                            <li class="splide__slide">
                                <a href="">
                                    <div class="containerImg5">
                                        <p>Polos</p>
                                        <p class="pText">Veja mais</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="prox_camps">
                <h2>Próximos Jogos</h2>
                <div class="container_jogos">
                    <div class="download_card">
                        <div class="game_img">
                            <img src="./assets/logo.png" alt="FIFA 23">
                        </div>
                        <div class="game_info">
                            <h3>FIFA 23</h3>
                            <span class="genre">Sports simulator</span>
                        </div>
                        <div class="download_status">
                            <span class="time">1 hour 23 min.</span>
                            <span class="progress">265Mb of 1,23Gb</span>
                        </div>
                        <div class="actions">
                            <button class="play">▶</button>
                            <button class="close">✕</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="part_dois_right">

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    new Splide('.splide', {
        perPage: 3,
        gap: '2rem',
        type: 'loop',
        pagination: true, 
        arrows: true,

        breakpoints: {
            1200: {
                perPage: 3, // até 1200px → 3 slides
                gap: '1.5rem',
            },
            992: {
                perPage: 2, // até 992px → 2 slides
                gap: '1rem',
            },
            600: {
                perPage: 1.5, // até 600px → 1 slide
                gap: '0.5rem',
                focus: 'center',
            },
        },
    }).mount();
</script>