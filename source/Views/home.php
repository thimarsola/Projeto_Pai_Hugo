<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("/css/home.min.css"); ?>" />
<?= $v->end; ?>

<!--hero-->
<section class="hero">

    <div class="container">

        <!--header-->
        <header class="hero__header">
            <p>Pai Hugo</p>
            <h1>Amarração Amorosa</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="hero__content">
            <p>Especialista em casos amorosos há mais de  20 anos, auxiliando quem precisa de ajuda para ser feliz!</p>

            <!--cta buttons-->
            <div class="hero__content__buttons">
                <a class="btn btn--theme-primary" href="https://api.whatsapp.com/send?phone=5511<?= CONTACT["whatsapp"]; ?>&text=Ol%C3%A1%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank">Fale comigo</a>
                <a class="btn btn--theme-primary" href="#sobre">Minha história</a>
            </div>
            <!--end of cta buttons-->

        </div>
        <!--end of content-->

        <!-- scroll down -->
        <div class="hero__scroll">
            <a href="#sobre">
                <span></span>
            </a>
        </div>
        <!-- end of scroll down -->

    </div>

</section>
<!--end of hero-->

<!--whatsapp button-->
<div id="whatsapp">

    <a href="https://api.whatsapp.com/send?phone=5511<?= CONTACT["whatsapp"]; ?>&text=Ol%C3%A1%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" title="Fale comigo pelo whatsapp" target="_blank">
        <img src="<?= asset("img/icone_whatsapp.svg"); ?>" loading="lazy" title="Fale comigo pelo whatsapp" alt="Botão whatsapp"/>
    </a>

</div>
<!--end of whatsapp button-->

<!--about-->
<section id="sobre" class="about">
    <div class="container">

        <!--row-->
        <div class="about__row">

            <!--image-->
            <div class="about__row__image">
                <picture>
                    <source srcset="<?= asset("img/foto_pai_hugo.jpg"); ?>" type="image/webp">
                    <img src="<?= asset("img/foto_pai_hugo.jpg"); ?>" loading="lazy" alt="Foto do Pai Hugo"/>
                </picture>
            </div>
            <!--end of image-->

            <!--content-->
            <div class="about__row__container">

                <!--header-->
                <header class="about__row__container__header">
                    <h1>Pai Hugo</h1>
                </header>
                <!--end of header-->

                <!--content-->
                <div class="about__row__container__content">
                    <h2>A mais de 30 anos ajudando quem precisa</h2>

                    <p>Sou um vidente, especializado em realizar rituais poderosos de amarração amorosa e domino a magia para poder trabalhar em cima do seu pedido.</p>
                    <p>Você está passando por crises, aflições, desânimos, desencontros com a felicidade? Se esta passando por algumas destas situações fique atento, pois, você pode estar sendo vítima de magia negra ou mau-olhado de pessoas invejosas e que querem te destruir.</p>
                </div>
                <!--end of content-->

            </div>
            <!--end of content-->

        </div>
        <!--end of row-->

        <!--grid-->
        <div class="about__grid">

            <!--column-->
            <div class="about__grid__column">
                <picture>
                    <source srcset="<?= asset("img/cartas_tarot.webp"); ?>" type="image/webp">
                    <img src="<?= asset("img/cartas_tarot.jpg"); ?>" loading="lazy" alt="Cartas de Tarot Pai Hugo"/>
                </picture>
            </div>
            <!--end of column-->

            <!--column-->
            <div class="about__grid__column">
                <picture>
                    <source srcset="<?= asset("img/centro_nacional_de_umbanda.webp"); ?>" type="image/webp">
                    <img src="<?= asset("img/centro_nacional_de_umbanda.jpg"); ?>" loading="lazy" alt="Centro Nacional de Umabanda - Pai Hugo"/>
                </picture>
            </div>
            <!--end of column-->

            <!--column-->
            <div class="about__grid__column">
                <picture>
                    <source srcset="<?= asset("img/cartas_tarot_mesa.webp"); ?>" type="image/webp">
                    <img src="<?= asset("img/ccartas_tarot_mesa.jpg"); ?>" loading="lazy" alt="Cartas de Tarot na mesa"/>
                </picture>
            </div>
            <!--end of column-->

        </div>
        <!--end of grid-->

    </div>
</section>
<!--end of about-->

<!--mooring-->
<section id="amarracao-amorosa" class="mooring">

    <div class="container">

        <!--row-->
        <div class="mooring__row">

            <!--container-->
            <div class="mooring__row__container">

                <!--header-->
                <header class="mooring__row__container__header">
                    <h1>Amarração Amorosa</h1>
                    <hr>
                </header>
                <!--end of header-->

                <!--content-->
                <div class="mooring__row__container__content">
                    <p>Amarração amorosa é um trabalho espiritual que invoca as entidades de luz para ajudar um casal que por algum motivo tivera seu relacionamento amoroso interrompido ou ameaçado. Este tipo de trabalho alinha a vida espiritual do casal de tal forma que o desejo de união carnal torna-se inevitável. Um dos principais efeitos de uma amarração amorosa é a de fazer com que a pessoa tenha sonhos com quem encomendou o trabalho. Estes sonhos tendem a se tornar cada vez mais intensos ao ponto de despertar desejos sexuais rapidamente.</p>

                    <a href="https://api.whatsapp.com/send?phone=5511<?= CONTACT["whatsapp"]; ?>&text=Ol%C3%A1%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" class="btn btn--theme-primary" title="Fale comigo pelo whatsapp" target="_blank">Fale comigo</a>
                </div>
                <!--end of content-->

            </div>
            <!--end of container-->

            <!--image-->
            <div class="mooring__row__image">
                <picture>
                    <source srcset="<?= asset("img/sol_lua_mistica.webp"); ?>" type="image/webp">
                    <img src="<?= asset("img/sol_lua_mistica.png"); ?>" loading="lazy" alt="Sol e Lua"/>
                </picture>
            </div>
            <!--end of image-->

        </div>
        <!--end of row-->

    </div>

</section>
<!--end of mooring-->

<!--works-->
<section id="trabalhos" class="works">

    <div class="container">

        <!--header-->
        <header class="works__header">
            <hr>
            <h1>Conheça nossos trabalhos</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="works__container">

            <?php
            $jsonWorks = file_get_contents(__DIR__ . "/includes/works.json");
            $worksList = json_decode($jsonWorks, true);

            foreach ($worksList['works'] as $work):
                ?>

                <!--card-->
                <article class="works__container__card">

                    <!--image-->
                    <div class="works__container__card__image">
                        <picture>
                            <source srcset="<?= asset("img/{$work["image"]}.webp"); ?>" type="image/webp">
                            <img src="<?= asset("img/{$work["image"]}.png"); ?>" loading="lazy" alt="Pai Hugo | Trabalho para <?= $work["title"]; ?>"/>
                        </picture>
                    </div>
                    <!--end of image-->


                    <!--content-->
                    <div class="works__container__card__content">

                        <!--header-->
                        <header class="works__container__card__content__header">
                            <h2><?= $work["title"]; ?></h2>
                        </header>
                        <!--end of header-->

                        <a href="https://api.whatsapp.com/send?phone=5511<?= CONTACT["whatsapp"]; ?>&text=Ol%C3%A1%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20<?= urlencode($work["title"]); ?>" class="btn btn--outline-theme-white" title="Fale comigo pelo whatsapp sobre o trabalho de <?= $work["title"]; ?>" target="_blank">Fale comigo</a>

                    </div>
                    <!--end of content-->


                </article>
                <!--end of card-->

            <?php endforeach; ?>

        </div>
        <!--end of content-->

    </div>

</section>
<!--end of works-->

<!--treatment-->
<section class="treatment">

    <div class="container">

        <!--container-->
        <div class="treatment__container">

            <!--header-->
            <header class="treatment__container__header">
                <p>Sofrendo por amor?</p>
                <h1>Atendimento especializado em unir casais</h1>
                <hr>
            </header>
            <!--end of header-->

            <!--content-->
            <div class="treatment__container__content">
                <p>Amarração amorosa é um trabalho espiritual que invoca as entidades de luz para ajudar um casal que por algum motivo tivera seu relacionamento amoroso interrompido ou ameaçado.</p>
                <p>Este tipo de trabalho alinha a vida espiritual do casal de tal forma que o desejo de união carnal torna-se inevitável. Um dos principais efeitos de uma amarração amorosa é a de fazer com que a pessoa tenha sonhos com quem encomendou o trabalho. Estes sonhos tendem a se tornar cada vez mais intensos ao ponto de despertar desejos sexuais rapidamente.</p>

                <a href="https://api.whatsapp.com/send?phone=5511<?= CONTACT["whatsapp"]; ?>&text=Ol%C3%A1%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" class="btn btn--theme-primary" title="Fale comigo pelo whatsapp" target="_blank">Fale comigo</a>
            </div>
            <!--end of content-->

        </div>
        <!--end of container-->

    </div>

</section>
<!--end of treatment-->

<!--testimony-->
<section class="testimony">

    <div class="container">

        <!--header-->
        <header class="testimony__header">
            <p>O que os clientes contam sobre o Pai Hugo</p>
            <h1>Nossos depoimentos</h1>
            <hr>
        </header>
        <!--end of header-->

        <div class="testimony__content">

            <?php
            $jsonTestimonials = file_get_contents(__DIR__ . "/includes/testimonials.json");
            $testimonialsList = json_decode($jsonTestimonials, true);

            foreach ($testimonialsList['testimonials'] as $testimony):
                ?>

                <!--card-->
                <article class="testimony__content__card">

                    <!--image-->
                    <div class="testimony__content__card__image">
                        <picture>
                            <source srcset="<?= asset("img/imagem_depoimento.webp") ?>" type="image/webp">
                            <img src="<?= asset("img/imagem_depoimento.png") ?>" loading="lazy" alt="Depoimento <?= $testimony["name"]; ?>"/>
                        </picture>
                    </div>
                    <!--end of image-->


                    <!--content-->
                    <div class="testimony__content__card__container">

                        <!--header-->
                        <header class="testimony__content__card__container__header">
                            <h2><?= $testimony["name"]; ?></h2>
                        </header>
                        <!--end of header-->

                        <p>"<?= $testimony["testimony"]; ?>"</p>

                    </div>
                    <!--end of content-->


                </article>
                <!--end of card-->

            <?php endforeach; ?>

        </div>

    </div>

</section>
<!--end of testimony-->

<!--cta-->
<section id="consulta" class="cta">

    <div class="container">

        <!--header-->
        <header class="cta__header">
            <hr>
            <h1>Agende já a sua consulta pelo whatsapp</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="cta__content">

            <a href="https://api.whatsapp.com/send?phone=5511<?= CONTACT["whatsapp"]; ?>&text=Ol%C3%A1%20gostaria%20de%20agendar%20uma%20consulta" class="btn btn--theme-primary" title="Agende sua consulta comigo pelo whatsapp" target="_blank">Quero agendar</a>

        </div>
        <!--end of content-->

    </div>

</section>
<!--end of cta-->

<!--caution-->
<section class="caution">

    <div class="container">

        <!--header-->
        <header class="caution__header">
            <p>Atenção</p>
            <h1>Não confie em consulta grátis</h1>
            <hr>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="caution__content">
            <p>** Os valores do atendimento são sob Consulta **</p>
            <p>** Os resultados podem não ser os mesmos para todos, a amarração é um trabalho em que o resultado e os prazos mudam de cliente para cliente **</p>
            <p>As ligações não são nossa responsabilidade e o valor da mesma será cobrada de acordo com a operadora. O custo médio de uma ligação fixa é de R$0,23 de acordo com a Anatel. Consulte sua operadora local. Claro R$ 1,35 – Oi R$1,53 -Vivo R$ 1,65 – Tim R$ 1,85</p>
        </div>
        <!--end of content-->

    </div>

</section>
<!--end of caution-->
