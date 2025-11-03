<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order - Dispatch</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>Order</h1>
    <p>193 orders found</p>

    <div class="order-tabs">
      <a href="order-all.html" class="tab-btn">All orders</a>
      <a href="order-dispatch.html" class="tab-btn active">Dispatch</a>
      <a href="order-pending.html" class="tab-btn">Pending</a>
      <a href="order-completed.html" class="tab-btn">Completed</a>
    </div>

    <table class="order-table">
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Address</th><th>Date</th><th>Price</th><th>Status</th><th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>003</td><td>Andi Wijaya</td><td>Jl. Mawar No. 88</td><td>01/03/2025</td><td>Rp 80K</td><td>Dispatch</td><td>⚙️</td>
        </tr>
        <tr>
          <td>005</td><td>Nina Putri</td><td>Jl. Anggrek No. 6</td><td>07/05/2025</td><td>Rp 110K</td><td>Dispatch</td><td>⚙️</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>