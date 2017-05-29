<?php include("header.php");?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bibliografía
                </h1>
                <?php
                $json = file_get_contents('data/biblio.json');
                $datos = json_decode($json,true);
                $todos = count($datos);
                ?>

                    <!-- Main Content -->
                <div class="container">
                <div class="row">


                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <h3>Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3>

                <?php for($n = 0; $n < $todos; $n++){?>
                  <div class="post-preview">
                      <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["ao"]);?>). <?php echo($datos[$n]["nombre"]);?>. <?php echo($datos[$n]["ciudad"]);?>:<?php echo($datos[$n]["ed"]);?></p>
                  </div>
                <?php }; ?>


                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /.row -->




        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
