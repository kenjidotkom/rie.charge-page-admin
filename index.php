<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rie.charge — Dashboard</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <div class="dashboard-root d-flex">
    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column">
      <div class="brand mb-5">
        <div class="brand-icon mb-3">
          <i class="bi bi-lightning-charge-fill"></i>
        </div>
        <div class="brand-text">rie.charge</div>
      </div>

      <nav class="nav flex-column gap-2">
        <a href="index.php" class="nav-item active d-flex align-items-center">
          <span class="nav-icon me-3">
            <i class="bi bi-grid-fill"></i>
          </span>
          <span>Dashboard</span>
        </a>
        <a href="order.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-3">
            <i class="bi bi-cart3"></i>
          </span>
          <span>Order</span>
        </a>
        <a href="article.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-3">
            <i class="bi bi-journal-text"></i>
          </span>
          <span>Article</span>
        </a>
        <a href="product.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-3">
            <i class="bi bi-box-seam"></i>
          </span>
          <span>Product</span>
        </a>
      </nav>
    </aside>

    <!-- Main content -->
    <main class="main flex-grow-1">
      <header class="mb-4">
        <h1 class="page-title">Dashboard</h1>
      </header>

      <!-- Stat cards -->
      <section class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6">
          <div class="stat-card">
            <div class="stat-icon">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="stat-body">
              <div class="stat-label">New Customers</div>
              <div class="stat-value">95+</div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="stat-card">
            <div class="stat-icon">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div class="stat-body">
              <div class="stat-label">Total Sales</div>
              <div class="stat-value">167</div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="stat-card">
            <div class="stat-icon">
              <i class="bi bi-send-fill"></i>
            </div>
            <div class="stat-body">
              <div class="stat-label">Total Order</div>
              <div class="stat-value">15483</div>
            </div>
          </div>
        </div>
      </section>

      <!-- Top products -->
      <section>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="section-title mb-0">Top Products</h4>
          <a href="product.php" class="see-all">See all</a>
        </div>

        <div class="table-wrap" style="background-color: #D1E7DD; padding: 15px; border-radius: 10px;">
          <div class="table-responsive">
            <table class="table table-success table-striped table-borderless mb-0" style="font-size: 20px;">
              <thead>
                <tr>
                  <th class="table-head-cell">No</th>
                  <th class="table-head-cell">Product Name</th>
                  <th class="table-head-cell">Review</th>
                  <th class="table-head-cell">Sold</th>
                  <th class="table-head-cell">Profit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Cold Pressed Juice</td>
                  <td><i class="bi bi-star-fill text-warning me-1"></i>4,5</td>
                  <td>198</td>
                  <td>Rp 3.960K</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Fitshot</td>
                  <td><i class="bi bi-star-fill text-warning me-1"></i>4,3</td>
                  <td>170</td>
                  <td>Rp 2.550K</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Asinan Kuah</td>
                  <td><i class="bi bi-star-fill text-warning me-1"></i>4,35</td>
                  <td>130</td>
                  <td>Rp 1.950K</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Rujan Kweni</td>
                  <td><i class="bi bi-star-fill text-warning me-1"></i>4,2</td>
                  <td>120</td>
                  <td>Rp 1.800K</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>