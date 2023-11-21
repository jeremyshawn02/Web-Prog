<!DOCTYPE html>

<html

lang="en">

<head>


<meta

charset="UTF-8">


<meta

name="viewport"

content="width=device-width, initial-scale=1.0">


<title>Order Summary</title>


<link

rel="stylesheet"

href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <style>
    .product-image {
      width: 100px;
      height: 100px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Order Summary</h1>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th>Product</th>
          <th>Image</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>NIKE WMNS AIR FORCE 1 '07 LX-PURPLE INK/BLACK-BLACK </td>
          <td><img src="img\download (1).jpeg" class="product-image" alt="Product Image"></td>
          <td>Rp 2.950.000,00</td>
          <td>1</td>
          <td>Rp 2.950.000,00</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4">Delivery</td>
          <td>Rp 1.349,00</td>
        </tr>
        <tr>
          <td colspan="4">Total</td>
          <td>Rp 2.951.349,00</td>
        </tr>
      </tfoot>
    </table>
    <hr>
    <a href="/home" class="btn btn-primary">Place Order</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
