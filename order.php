<?php include("header.inc.php"); ?>
    
<section class="orderPage" style="margin-top: 100px">
  <div class="container">
    <main>
    <!-- section title -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title mb25 text-center">
                   <h6 class="sub-title">
                        <span></span>
                        Final Page
                    </h6>
                    <h3 class="title">
                        Order Now
                    </h3>
                </div>
            </div>
        </div>
    </div><hr>

      <div class="row g-3">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8" style="margin-bottom: 100px">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" required>
              </div>

              <div class="col-md-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" required>
              </div>

              <div class="col-md-12">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              </div>

              <div class="col-md-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
              </div>

              <div class="col-md-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              </div>

              <div class="col-md-12">
                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">Country</label>
                <select class="form-control" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select class="form-control" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
              </div>

              <div class="col-md-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
              </div>
            </div>

            <hr class="my-4">

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Bkash</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">Rocket</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">Nagad</label>
              </div>
            </div>

            <div class="row gy-3">
              <div class="col-md-12">
                <label for="cc-name" class="form-label">Transaction Code</label>
                <input type="text" class="form-control" id="transaction" placeholder="">
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg pull-right" type="submit">Confirm</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</section>

<?php include ("footer.inc.php"); ?>
