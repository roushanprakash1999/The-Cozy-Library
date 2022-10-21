<?php



function component($bookName, $authorName, $rent, $bookCover, $bookId){
    $element ="<div class='col-lg-3 col-sm-6 my-3 my-md-0 book-item'>
    <form action='welcome.php' method='post'>
      <div class='card shadow'>
        <div>
          <img style = 'width:35%;'
            src='Pics/Covers/$bookCover.jpg'
            alt='book'
            class=img-fluid card-img-top book-cover'
          />
        </div>
        <div class='card-body'>
          <h5 class='card-title'>$bookName</h5>
          <p class='card-text'>Author : 
            $authorName
          </p>
          <h5>
            <span class='price'>₹$rent/day</span>
          </h5>
          <button type='submit' class='btn btn-primary my-3 rent-button' name='rent'>Rent&nbsp;<i class ='fas fa-shopping-cart'></i></button>
          <input type='hidden' name='book_id' value='$bookId'>
        </div>
      </div>
    </form>
  </div>";

echo $element;
}

function cartElement($bookCover, $bookName, $authorName, $rent, $bookId){
  $element = "<form action='cart.php?action=remove&id=$bookId' method='post' class='cart-items'>
  <div class='border rounded'>
      <div class = 'row bg-white'>
          <div class ='col-md-6'>
              <img src = 'Pics/Covers/$bookCover.jpg' style = 'width:40%;' alt='book_cover' class='img-fluid'>
          </div>
          <div class='col-md-6'>
              <h5 class='pt-3'>$bookName</h5>
              <p class='author'>Author : $authorName</p>
              <h5 class='pt-2'>₹$rent/day</h5>
              <button type='submit' class='btn btn-danger mx-0 my-3' id='remove' name='remove'>Remove
              </button>
          </div>
      </div>
  </div>
</form>";

echo $element;
}

?>



