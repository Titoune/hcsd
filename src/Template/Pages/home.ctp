<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Expertises</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <?= $this->Html->image('unknown.png', ['width' => '150']) ?>
                <h4 class="service-heading">Développement commercial</h4>
                <p class="text-muted">En construction.</p>
            </div>
            <div class="col-md-3">
                <?= $this->Html->image('unknown.png', ['width' => '150']) ?>
                <h4 class="service-heading">Communication / (e)Marketing</h4>
                <p class="text-muted">En construction.</p>
            </div>
            <div class="col-md-3">
                <?= $this->Html->image('unknown.png', ['width' => '150']) ?>
                <h4 class="service-heading">Rédaction print / web (SEO)</h4>
                <p class="text-muted">En construction.</p>
            </div>
            <div class="col-md-3">
                <?= $this->Html->image('unknown.png', ['width' => '150']) ?>
                <h4 class="service-heading">Recherche partenariats</h4>
                <p class="text-muted">En construction.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">En construction.</h3>
            </div>
        </div>
        <!-- <div class="row"> -->
        <!--  <div class="col-md-4 col-sm-6 portfolio-item"> -->
        <!--   <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"> -->
        <!--       <div class="portfolio-hover"> -->
        <!--           <div class="portfolio-hover-content"> -->
        <!--               <i class="fas fa-plus fa-3x"></i> -->
        <!--            </div> -->
        <!--        </div> -->
        <!--         <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt=""> -->
        <!--     </a> -->
        <!--     <div class="portfolio-caption"> -->
        <!--         <h4>Threads</h4> -->
        <!--         <p class="text-muted">Illustration</p> -->
        <!--     </div> -->
        <!--   </div> -->
        <!-- </div>  -->
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">A propos</h2>
                <h3 class="section-subheading text-muted">En construction.</h3>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Références</h2>
            </div>
        </div>
        <!--  <div class="row"> -->
        <!--   <div class="col-sm-4"> -->
        <!--     <div class="team-member"> -->
        <!--        <?= $this->Html->image('team/valdracy.png', ['class' => 'mx-auto img-thumbnail', 'width' => "225"]) ?> -->
        <!--        <p class="text-muted">"x V"</p> -->
        <!--     </div> -->
        <!--  </div> -->
        <!--</div> -->
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">En construction.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contactez-moi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->Form->create($contact, ['id' => 'contactForm', 'name' => 'sentMessage']); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Votre nom *']); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('email', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Votre email *']); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('phone', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Votre téléphone *']); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $this->Form->control('content', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Votre messagez *']); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <?= $this->Form->button('Envoyer', ['id' => 'sendMessageButton', 'class' => 'btn btn-primary btn-xl text-uppercase']); ?>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>