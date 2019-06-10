<?php include 'header.php'; ?>

<section>


<div class="produs-container">
<div  class="title-produs">
                <strong> Editeaz&#259;</strong>
            </div>
            <div class="form-produs">
                <form class="admin-form" action="" method="post">
                <label for="adresa"><b>Adres&#259; </b></label>
       <input type="text" placeholder="Adresa" name="adresa" >
       <label for="telefon"><b>Telefon</b></label>
       <input type="text" placeholder="Numar de telefon" name="telefon" >
       <label for="oras"><b>Oras</b></label>
       <input type="text" placeholder="Oras" name="oras" >
       <label for="judet"><b>Judet</b></label>
       <input type="text" placeholder="Judet" name="judet" >
       <label for="cod"><b>Cod postal</b></label>
       <input type="text" placeholder="Cod postal" name="cod">
        
                    <button type="submit" value="submit" name="submit" class="success"><i class="fa fa-check-circle"></i> Salveaz&#259;</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->

</section>


<?php include 'footer.php'; ?>