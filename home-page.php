<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();/* Tells WordPress to include header.php */ ?>

    <section class="container-fluid aboutbg text-center">
        <div class="container">
<!--placeholder for about me  -->
<h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <div class="blocker"></div>

        </div>
    </section>



    <section class="container-fluid articlesbg">
        <div class="container">
            <div class="row">
                <!--  a row that gives us access to the BS columns-->
                <div class="article-title text-center">
                    <h3>LATEST ARTICLES</h3>
                </div>

<div class="col-md-4 article-cent"> 

<!--           Placeholder for col 1                 -->
             
              </div>
            </div>
            <div class="col-md-4 article-cent">
            <!--           Placeholder for col 2                 -->
             

            </div>


            <div class="col-md-4 article-cent"> 
            <!--           Placeholder for col 1                 -->

           

        </div><!-- row-->
        </div><!-- container-->
    </section><!-- container-fluid-->
<?php get_footer();/* Tells WordPress to include footer.php */ ?>


