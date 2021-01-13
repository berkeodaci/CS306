<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Album example · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="products.css" rel="stylesheet">
</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Welcome!</h4>
            <ul>
              <li><a style="color: 	#FFFFFF">name </a></li>
              <li><a style="color: 	#FFFFFF">surname</a></li>
            </ul>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 style="color:#FFFFFF">Account</h4>
            <ul id="usersettings">
            <li><a href="edit_user_info.php" style="color: 	#FFFFFF">Edit User Information </a></li>
              <li><a href="history.php" style="color: 	#FFFFFF">Order History</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="home.php" class="navbar-brand d-flex align-items-center">
          <strong>Home</strong>
        </a>
        <a href="products.php" id="mymy" class="navbar-brand d-flex align-items-center">
          <strong>Products</strong>
        </a>
        <a href="about.php" class="navbar-brand d-flex align-items-center">
          <strong>About</strong>
        </a>
        <a action="search.php" class="md-form mt-0" id="searchtime">
        <form action="search.php" method="POST">
            <input type="search" id="mysearch" name="mysearch" placeholder="Search" aria-label="Search">
        </form>
        </a>
        <a href="#" class="navbar-brand d-flex align-items-center">
        </a>

        <div class="dropdown">
          <img class="mb-4" src="https://drive.google.com/uc?export=view&id=1MbY3FN3HvBnFjl3HQROjgaXkBq5nhq_V" id="cart" lt="" width="72" height="57">

          <div class="dropdown-content" id="mydropdown">

            <div id="cartheader">
              <a id="total"> Total:</a>
              <button id="proceed" float:right> Proceed to Checkout</button>
            </div>

            <?php
            $db = mysqli_connect('localhost', 'root', '', 'step4');
            if ($db->connect_errno > 0) {
              die('Baglanamadim [' . $db->connect_error . ']');
            }

            $result = mysqli_query($db, "SELECT * FROM product");

            while ($row = mysqli_fetch_assoc($result)) {
              $product_name = $row['product_name'];
              $description = $row['product_description'];
              $price = $row['price'];
              $brand = $row['brand'];
              $product_id = $row['product_id'];

              echo "<li class='list-group-item'>";
              echo "<!-- Custom content-->";
              echo "<div class='media align-items-lg-center flex-column flex-lg-row p-3'>";
              echo   "<div class='media-body order-2 order-sm-1'>";
              echo      "</div><img src='https://drive.google.com/uc?export=view&id=1MbY3FN3HvBnFjl3HQROjgaXkBq5nhq_V' alt='Generic placeholder image' width='100' class='ml-lg-5 order-1 order-lg-2'>";
              echo      "<h5 class='mt-0 font-weight-bold mb-2'>$product_name</h5>";
              echo       "<p class='font-italic text-muted mb-0 small'>$description</p>";
              echo "<div class='mt-0 font-weight-bold mb-2'>
                <h6 class='font-weight-bold my-2'>$price $</h6>
                
                
                  </div><form action='deleteFromCard.php' method='POST'>
                
                
                 
                  <input style='width: 50px' value = 1 class='form-control my-2' name='countt' type='text' placeholder='countt' aria-label='Amount'>     
                  <button type='submit' class='btn btn-sm btn-outline-secondary'>Add</button> 
                  </form>
                  <form action='deleteFromCard.php' method='POST'>
                  <button type='submit' class='btn btn-sm btn-outline-secondary'name='product_id' value=$product_id>Delete</button>  
                  </form>";
            }
            ?>
          </div>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </div>
  </header>

  <main>



    <div id="sidebar">
    <div>
        <h6 class="p-1 border-bottom">Category</h6>
        <fieldset>
          <p>
          <div class='form-inline border rounded p-md-2 my-2'> <input value='default' type='radio' name='type' id='notugly' checked='checked'> <label for='notugly' class='pl-1 pt-sm-0 pt-1'>All</label> </div>
 
        <?php

            $db = mysqli_connect('localhost', 'root', '', 'step4');
            if ($db->connect_errno > 0) {
              die('Baglanamadim [' . $db->connect_error . ']');
            }

            $result = mysqli_query($db, "SELECT * FROM Category");

            while ($row = mysqli_fetch_assoc($result)) {
              $category_name = $row['category_name'];
              echo "<div class='form-inline border rounded p-md-2 my-2'> <input value='$category_name'type='radio' name='type' id='notugly'> <label for='notugly' class='pl-1 pt-sm-0 pt-1'>$category_name</label> </div>";
            }
            ?>
           
            </p>
        </fieldset>
      </div>
      <div>
        <h6 class="p-1 border-bottom">Filter By</h6>
        <p class="mb-2">Price</p>
        <fieldset>
          <p><small>min price</small></p>
          <p>
          <input value = 0 class="form-control my-2" name="min" type="text" placeholder="Min. Price" aria-label="Min. Price">
          <p><small>max price</small></p>
          <input value = 9999 class="form-control my-2" name="max" type="text" placeholder="Max. Price" aria-label="Max. Price">
          </p>
        </fieldset>
      </div>
      <div>
        <h6 class="p-1 border-bottom">Rating</h6>
        <fieldset>
          <p>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="rating" id="notugly" value='>0' checked="checked">  <label for="notugly" class="pl-1 pt-sm-0 pt-1">Any</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="rating" id="notugly" value='>4'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>4</label> </div>
          <div class="form-inline border rounded p-sm-2 my-2"> <input type="radio" name="rating" id="ugly" value='>4.5' > <label for="ugly" class="pl-1 pt-sm-0 pt-1">>4.5</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="rating" id="notugly" value='>0.5'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>0.5</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="rating" id="notugly" value='>4'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>4</label> </div>
          <div class="form-inline border rounded p-sm-2 my-2"> <input type="radio" name="rating" id="ugly" value='>4.5' > <label for="ugly" class="pl-1 pt-sm-0 pt-1">>4.5</label> </div>
          </p>
        </fieldset>
      </div>
      <div>
        <h6 class="p-1 border-bottom">Order by</h6>
        <fieldset>
          <p>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='default' checked="checked"> <label for="notugly" class="pl-1 pt-sm-0 pt-1">Default</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='price_ascdending'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">Price Ascending</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='price_descending'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>Price Descending</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='name_ascending'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">A-Z</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='name_descending'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>Z-A</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='rating_ascending'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>Rating Ascending</label> </div>
          <div class="form-inline border rounded p-md-2 my-2"> <input type="radio" name="orderby" id="notugly" value='rating_descending'> <label for="notugly" class="pl-1 pt-sm-0 pt-1">>Rating Descending</label> </div>
        </p>
        </fieldset>
      </div>
      <br>
      </br>
      <button class='w-10 btn btn-lg btn-primary' type='submit sign in'>Apply Filter(s)</button>
      <br>
      </br>
      <button class='w-10 btn btn-lg btn-primary' type='submit sign in' id="reset">Reset Filter(s)</button>
    </div>


    <div class="rp-main-content album py-5 bg-light text-center" id="products">
      <?php

      $db = mysqli_connect('localhost', 'root', '', 'step4');
      if ($db->connect_errno > 0) {
        die('Baglanamadim [' . $db->connect_error . ']');
      }
      
      $word = $_POST['mysearch'];

      $myquery = "SELECT P.product_name AS product_name, P.product_description AS product_description,P.brand AS brand, P.price AS price
      FROM Product P, ProductCategory PC, Category C 
      WHERE ((P.product_id = PC.product_id) AND (PC.category_id = C.category_id)) AND ((C.category_name LIKE '%$word%')
       OR (P.product_name LIKE '%$word%') OR (P.product_description LIKE '%$word%') OR (P.brand LIKE '%$word%'))";
        
      $result = mysqli_query($db, $myquery);
      
      while ($row = mysqli_fetch_assoc($result)) {
        $product_name = $row['product_name'];
        $description = $row['product_description'];
        $price = $row['price'];
        $brand = $row['brand'];

        echo "<li class='list-group-item'>";
        echo "<!-- Custom content-->";
        echo "<form class='media align-items-lg-center flex-column flex-lg-row p-3'>";
        echo   "<div class='media-body order-2 order-lg-1'>";
        echo      "</div><img src='https://drive.google.com/uc?export=view&id=1MbY3FN3HvBnFjl3HQROjgaXkBq5nhq_V' alt='Generic placeholder image' width='200' class='ml-lg-5 order-1 order-lg-2'>";
        echo      "<h5 class='mt-0 font-weight-bold mb-2'>$product_name</h5>";
        echo       "<p class='font-italic text-muted mb-0 small'>$description</p>";
        echo "<div class='mt-0 font-weight-bold mb-2'>
                      <h6 class='font-weight-bold my-2'>$price $</h6>
                      
                        </div>" . "<div class='form-group' align='center'>
                        <select class='form-control align-items-lg-center' id='exampleSelect1' style='max-width:20%;'>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                        </select>
                      </div>
                      <br>
                      </br>";

        echo "<button class='w-10 btn btn-lg btn-primary' type='submit sign in'>Add to cart</button>";
        echo  "</form>";
        echo "</li>";
      }
      echo "</table>";


      ?>
    </div>


  </main>


  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1"> All rights reserved to &copy;BuyZone Group </p>
      <p class="mb-0">2020-2021 </p>
    </div>
  </footer>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>