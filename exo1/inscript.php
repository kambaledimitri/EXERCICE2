
<!DOCTYPE html>
<html lang="en">
<?php include('parts/header0.php')?>
<body>

<?php include('parts/header.php')?>

   

    <section id="contact-page">
        <div class="container">
           
            <div class="row"> 
                
                <form method="POST"  class="col-sm-12" name="inscript" action="INSCRIPT_ET.php">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Nom *</label>
                            <input type="text" name="Nom" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Post nom *</label>
                            <input type="text" name="Post_nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Prenom *</label>
                            <input type="text" name="Prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Sexe</label>
                            <select class="form-control" type="Text" name="Sexe">
                                <option >HOMME</option>
                                <option >FEMME</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Telephone *</label>
                            <input type="text" class="form-control" name="Telephone">
                        </div>
                        <div class="form-group">
                            <label>Promotion</label>
                            <select class="form-control" type="Text" name="Promotion">
                                <option >PREMIERE</option>
                                <option >DEUXIEME</option>
                                <option >TROISIEME</option>
                                <option >QUATRIEME</option>
                                <option >CINQIEME</option>
                                <option >SIXIEME</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" type="Text" name="Section">
                                <option >LATIN-PHILO</option>
                                <option >MATH-PHISIQUE</option>
                                <option >BIOLOGIE-CHIMIE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <Input class="btn btn-primary btn-lg" type="submit" name="envoyer" value="Envoyer">
                        </div>                     
                    </div>
                    
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->



    <?php include('parts/footer.php')?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>