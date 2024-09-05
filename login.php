<?php
include "komponenty/head.php";

include "komponenty/header.php";

?>
<section class="vh-100">
  <div class="container h-custom">
    <div class="row mt-3 d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="/eshop/public/img/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/eshop/akcie/prihlasit_sa.php">
          
            

        

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="zadajte email adresu" />
            <label class="form-label" for="form3Example3">Email addresa</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="heslo" id="form3Example4" class="form-control form-control-lg"
              placeholder="zadajte heslo" />
            <label class="form-label" for="form3Example4">Heslo</label>
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Prihlásiť sa</button>
            
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>






<?php
include "komponenty/footer.php";
?>