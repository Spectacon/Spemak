<div class="d-flex">
          <a class="btn btn-outline-success" href="cart/cart.php">Cart 
          <?php if (isset($_SESSION['cart'])) : ?>
            <?php echo count($_SESSION['cart']);; ?>
          <?php endif; ?>
          </a>