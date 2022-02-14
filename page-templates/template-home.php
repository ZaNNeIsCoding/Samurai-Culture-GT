<?php
/**
* Template Name: Home Template
 */
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <div
    id="carouselExampleIndicators"
    class="carousel slide"
    data-ride="carousel"
    >
    <ol class="carousel-indicators">
        <li
        data-target="#carouselExampleIndicators"
        data-slide-to="0"
        class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div
        class="carousel-item active"
        style="
            background-image: url(https://cutewallpaper.org/22/samurai-4k-wallpapers/1272814174.jpg);
        "
        ></div>
        <div
        class="carousel-item"
        style="
            background-image: url(https://wallpapercave.com/wp/wp9631628.jpg);
        "
        ></div>
        <div
        class="carousel-item"
        style="
            background-image: url(https://images.unsplash.com/photo-1600924779117-927b4f81457d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
        "
        ></div>
        <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
        >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
        </a>
        <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
        >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
        </a>
    </div>
    </div>

    <div class="main-area py-5 container text-center lg-10">
    <div class="row justify-content-center">
        <div class="col-sm col-md-10 col-lg-6">
        <h1 style="border: double 5px purple" ><?php $title="-Samurai "; the_title ($title); ?></h1>
        <h2>Curs revolutionar!</h2>

                <p class="pb-3 text-center">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem quas
                culpa iure eveniet reprehenderit, quaerat tenetur assumenda expedita
                dicta, odio corporis laborum aut suscipit facere numquam dignissimos
                dolor consectetur. Yin and Yang
                </p>

                <p class="pb-3 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem quas
                culpa iure eveniet reprehenderit, quaerat tenetur assumenda expedita
                dicta, odio corporis laborum aut suscipit facere numquam dignissimos
                dolor consectetur. Samurai Discipline
                </p>

                                <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                        Register now
        </button>

                                    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">To - Contact Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    <div class="modal-body">
                    >> To register yourself in our course go to the "Contact" tab. You can also press "Get Details" to jump directly there. <<
                </div>
                    </div>
                </div>
    </div>
    <button type="button" class="btn btn-primary cere-detalii"><a href="/contact/">Get Details</a></button>
    </div>
</div>
</div>

    <div
    class="caracteristi bg-light py-5 bortder-top border-bottom text-center"
    >
    <div class="container mb-5">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="<?php the_field('image_1');?>" class="imagine" />
            <h5><?php the_field('title_1');?></h5>
            <p><?php the_field('description_1');?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php the_field('image_2');?>" class="imagine" />
            <h5><?php the_field('title_2');?></h5>
            <p><?php the_field('description_2');?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php the_field('image_3');?>" class="imagine" />
            <h5><?php the_field('title_3');?></h5>
            <p><?php the_field('description_3');?></p>
        </div>
        </div>
    </div>
    </div>

    <section class="sectiune-php w-100%">
            <div class="row py-5 text-center rand-participanti bg-warning">
            <div class="col-sm-6 col-lg-3 pb-3">
            <h3>
                <?php

                $text = "participanți la modulul " ;
                $text_suma = "participanți în total" ;
                $grup_elevi = 1;

                $a = get_field('number_a') ; // numarul de participanti din modulul a
                $format = number_format($a, 0, "", ".");
                print $format;

                ?>
            </h3>
            <h4>
                <?php 
                
                echo $text . $grup_elevi , '<br>';
                
                ?>
            
            </h4>
        
            </div>
            <div class="col-sm-6 col-lg pb-3">
            <h3>
                <?php

                $b = get_field('number_b') ; // numarul de participanti din modulul b
                $format = number_format($b, 0, '', '.');
                print $format;
        
                
                ?>
            </h3>

            <h4>
                <?php 
                
                echo $text . ++$grup_elevi , '<br>';
                
                ?>
            
            </h4>

            </div>
            <div class="col-sm-6 col-lg-3 pb-3">
            <h3>
                <?php

                $c = get_field('number_c') ; // numarul de participanti din modulul c
                $format = number_format($c, 0, '', '.');
                print $format;
                
                ?>
            </h3>

            <h4>
                <?php 
                
                echo $text . ++$grup_elevi , '<br>';
                
                ?>
            
            </h4>
            
            </div>
            <div class="col-sm-6 col-lg-3 coloana-suma pb-3"> 
            <h3>
                <?php
                
                $s = $a + $b + $c;
                $format = number_format($s, 0, '', '.');
                if ($s < 50000) echo $format;
                else echo "<b>" . $format;


                ?>
            </h3>

            <h4>
                <?php 
                
                echo $text_suma;
                
                ?>

            </h4>
            
            </div>
            </div>
        </div>
    </section>

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();