<!DOCTYPE html>
<html lang="RO">

<head>
	 <meta charset="UTF-8">
	<title>Perfumer</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styles.css"   type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


</head>


<body>
	<header>
	    <div id="Div2">
		    <div>
				<h1 class="h1" style="padding-left:90%">Perfumer</a></h1>
			</div>
		</div>
    </header>
<section>
    <div class="container">
        <!-- Create Form -->
        <div class="produs-container">
            <div class="title-produs">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="form-produs">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="barcode">Cod produs</label>
                            <input type="text"  id="barcode" name="barcode" placeholder="Cod" required>
                        </div>
                        <div class="form-group">
                            <label for="name" >Nume</label>
                            <input type="text" id="name" name="name" placeholder="Nume" required>
                        </div>

                        <div class="form-group">
                            <label for="gender" >Gen</label>
                            <input type="text" id="gender" name="gender" placeholder="Gen" required>
                        </div>
                    </div>
                    <div class="stocuri"> 
                        <p><strong> Stocuri </strong></p>
                    </div> 
                    <div class="form-row">
                        <div class="form-group">
                            <label for="qty1" >Cantitate</label>
                            <input type="number"  name="qty1" id="qty1" placeholder="Cantitate" required>
                        </div>
                        <div class="form-group">
                            <label for="price1" >Pret</label>
                            <input type="number" id="price1" name="price1" placeholder="Pret" required>
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group">
                            <label for="qty2" >Cantitate</label>
                            <input type="number"  name="qty2" id="qty2" placeholder="Cantitate" required>
                        </div>
                        <div class="form-group">
                            <label for="price2" >Pret</label>
                            <input type="number" id="price2" name="price2" placeholder="Pret" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="qty3" >Cantitate</label>
                            <input type="number"  name="qty3" id="qty3" placeholder="Cantitate" required>
                        </div>
                        <div class="form-group">
                            <label for="price3" >Pret</label>
                            <input type="number" id="price3" name="price3" placeholder="Pret" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="image" >Imagine</label>
                            <input type="text" name="image" id="image" placeholder="URL imagine">
                        </div>
                        <div class="form-group">
                            <label for="essence" >Esenta</label>
                            <input type="text" name="essence" id="essence" placeholder="Esenta">
                        </div>
                        <div class="form-group">
                            <label for="category" >Categorie</label>
                            <input type="text" name="category" id="category" placeholder="Categorie">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="base" >Note baza</label>
                            <input type="text" name="base" id="base" placeholder="Note baza">
                        </div>
                        <div class="form-group">
                            <label for="heart" >Note inima</label>
                            <input type="text" name="heart" id="heart" placeholder="Note inima">
                        </div>
                        <div class="form-group">
                            <label for="top" >Note varf</label>
                            <input type="text" name="top" id="top" placeholder="Note varf">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descriere" >Descriere</label>
                        <textarea name="description" id="" rows="10" class="form-control" placeholder="Descriere"></textarea>
                    </div>
                    <button type="submit" class="success"><i class="fa fa-check-circle"></i> Salveaza</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
</section>
</body>
</html>