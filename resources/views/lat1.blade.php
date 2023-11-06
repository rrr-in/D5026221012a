<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="lat1_style.css">
    <title>Bootstrap Example</title>


</head>

<body>
    <center>
        <span class="container">
            <div class="d-flex justify-content-center">
                <button class="btn btn-address">+Add New Address</button>
            </div>
        </span><br>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="container text-left text-white">
                    Payment Method
                </div>
            </div>
            <div class="col"></div>
        </div><br>

        <div
        class="card"
        style="width: 450px; background-color: #4b4b4b; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body custom-card-body">
          <div class="payment-method">
            <div class="row">
                <div class="col-2">
                  <img src="Mastercard_2019_logo.svg.png" alt="MasterCard Logo" class="img-fluid" style="max-width: 100px; max-height: 50px;">
                </div>
                <div class="col-8">
                  <label for="credit-card" style="color: white;">Master Card</label> <br>
                  <label for="credit-card" style="color: white;">**** **** ****</label>
                </div>
                <div class="col-2 custom-radio">
                  <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                </div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div
        class="card"
        style="width: 450px; background-color: #4b4b4b; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body custom-card-body">
          <div class="payment-method">
            <div class="row">
                <div class="col-2">
                  <img src="https://png.pngtree.com/png-clipart/20210523/ourmid/pngtree-cash-on-delivery-pin-point-png-image_3342464.jpg" alt="MasterCard Logo" class="img-fluid" style="max-width: 90px; max-height: 50px;">
                </div>
                <div class="col-8">
                  <label for="credit-card" style="color: white;">Cash On Delivery</label> <br>
                </div>
                <div class="col-2 custom-radio">
                  <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                </div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <span class="container">
        <div class="d-flex justify-content-center">
            <button class="btn btn-payment">+Add Payment Method</button>
        </div>
    </span><br>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="container text-left text-white">
                Order Summary
            </div>
        </div>
        <div class="col"></div>
    </div><br>

    <div
        class="card"
        style="width: 450px; background-color: #4b4b4b; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <div class="payment-method">
            <div class="row">
              <div class="col-10 text-left text-white">
                Special Platter <br>
                Peperoni Pizza <br>
                Burger
              </div>
              <div class="col-2 text-right" style="color: #3C7670;">
                1x <br>
                1x <br>
                1x
              </div>
            </div>
          </div>
        </div>
      </div><br>

      <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="container text-left text-white">
                Cost Summary
            </div>
        </div>
        <div class="col"></div>
    </div><br>

    <div
        class="card "
        style="width: 450px; background-color: #4b4b4b; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <div class="payment-method">
            <div class="row">
              <div class="col-10 text-left text-white">
                Shipping <br>
                Item Total <br>
                Total Payment
              </div>
              <div class="text-right" style="color: #3C7670;">
                $0.20 <br>
                $35.80 <br>
                $56.00
              </div>
            </div>
          </div>
        </div>
      </div>

      <span class="container">
        <div class="d-flex justify-content-center">
            <button class="btn btn-order">Confirm Order</button>
        </div>
    </span><br>



    </center>




</body>

</html>
