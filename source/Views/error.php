<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("/css/error.css"); ?>" />
<?= $v->end; ?>

<?= $v->start("navbar"); ?>
<span></span>
<?= $v->end; ?>

<main>

    <!--error-->
    <section class="error">
        <div class="container">

            <!--header-->
            <header class="error__header">
                <h1><?= $error; ?></h1>
                <p>Opps! Página não encontrada</p>
            </header>
            <!--end of header-->

            <!--content-->
            <div class="error__content">
                <p>A página que você está procurando não existe. Você pode ter digitado o endereço errado ou a página pode ter sido removida.</p>

                <a href="<?= url(); ?>" class="btn btn--theme-primary">Voltar para o início</a>
            </div>
            <!--end of content-->

        </div>
    </section>
    <!--end of error-->

</main>



