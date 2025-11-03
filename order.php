<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rie.charge — Order</title>

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
        <a href="index.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-3">
            <i class="bi bi-grid-fill"></i>
          </span>
          <span>Dashboard</span>
        </a>
        <a href="order.php" class="nav-item active d-flex align-items-center">
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
        <h1 class="page-title">Order</h1>
        <p class="page-subtitle">193 orders found</p>
      </header>

      <!-- Filter Tabs -->
      <div class="filter-tabs mb-4">
        <button class="filter-tab active">All orders</button>
        <button class="filter-tab">Dispatch</button>
        <button class="filter-tab">Pending</button>
        <button class="filter-tab">Completed</button>
      </div>

      <!-- Date Range Filter -->
      <div class="d-flex justify-content-end mb-4">
        <div class="date-filter">
          <div class="date-input-group">
            <i class="bi bi-calendar3"></i>
            <input type="date" value="2025-09-02" class="date-input">
          </div>
          <span class="date-separator">to</span>
          <div class="date-input-group">
            <i class="bi bi-calendar3"></i>
            <input type="date" value="2025-09-03" class="date-input">
          </div>
        </div>
      </div>

      <!-- Orders Table -->
      <section>
        <div class="table-wrap-order">
          <table class="orders-table">
            <thead>
              <tr>
                <th>
                  id
                  <i class="bi bi-chevron-down ms-1"></i>
                </th>
                <th>Name</th>
                <th>Address</th>
                <th>
                  Date
                  <i class="bi bi-chevron-down ms-1"></i>
                </th>
                <th>
                  Price
                  <i class="bi bi-chevron-down ms-1"></i>
                </th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="order-row">
                <td class="order-id">001</td>
                <td>Budi Santoso</td>
                <td>Jl. Merdeka No. 12</td>
                <td>02/09/2025</td>
                <td>Rp 120K</td>
                <td><span class="status-badge status-completed">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-gear-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><h6 class="dropdown-header">Change Status</h6></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="dispatch">
                        <i class="bi bi-send me-2"></i>Dispatch
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="pending">
                        <i class="bi bi-clock me-2"></i>Pending
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="completed">
                        <i class="bi bi-check-circle me-2"></i>Completed
                      </a></li>
                    </ul>
                  </div>
                </td>
              </tr>

              <tr class="order-row">
                <td class="order-id">002</td>
                <td>Siti Aminah</td>
                <td>Jl. Melati No. 5</td>
                <td>03/10/2025</td>
                <td>Rp 90K</td>
                <td><span class="status-badge status-pending">Pending</span></td>
                <td>
                  <div class="dropdown">
                    <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-gear-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><h6 class="dropdown-header">Change Status</h6></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="dispatch">
                        <i class="bi bi-send me-2"></i>Dispatch
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="pending">
                        <i class="bi bi-clock me-2"></i>Pending
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="completed">
                        <i class="bi bi-check-circle me-2"></i>Completed
                      </a></li>
                    </ul>
                  </div>
                </td>
              </tr>

              <tr class="order-row">
                <td class="order-id">003</td>
                <td>Andi Wijaya</td>
                <td>Jl. Mawar No. 88</td>
                <td>01/03/2025</td>
                <td>Rp 80K</td>
                <td><span class="status-badge status-dispatch">Dispatch</span></td>
                <td>
                  <div class="dropdown">
                    <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-gear-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><h6 class="dropdown-header">Change Status</h6></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="dispatch">
                        <i class="bi bi-send me-2"></i>Dispatch
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="pending">
                        <i class="bi bi-clock me-2"></i>Pending
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="completed">
                        <i class="bi bi-check-circle me-2"></i>Completed
                      </a></li>
                    </ul>
                  </div>
                </td>
              </tr>

              <tr class="order-row">
                <td class="order-id">004</td>
                <td>Lina Hartati</td>
                <td>Jl. Kenanga No. 45</td>
                <td>09/08/2025</td>
                <td>Rp 75K</td>
                <td><span class="status-badge status-completed">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-gear-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><h6 class="dropdown-header">Change Status</h6></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="dispatch">
                        <i class="bi bi-send me-2"></i>Dispatch
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="pending">
                        <i class="bi bi-clock me-2"></i>Pending
                      </a></li>
                      <li><a class="dropdown-item status-option" href="#" data-status="completed">
                        <i class="bi bi-check-circle me-2"></i>Completed
                      </a></li>
                    </ul>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
          <div class="pagination-info">showing 4 of 28</div>
          <div class="pagination-controls">
            <button class="pagination-btn"><i class="bi bi-chevron-left"></i></button>
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn">4</button>
            <button class="pagination-btn"><i class="bi bi-chevron-right"></i></button>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Handle status change
    document.querySelectorAll('.status-option').forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Get status from data attribute
        const newStatus = this.getAttribute('data-status');
        
        // Find the status badge in the same row
        const row = this.closest('tr');
        const statusBadge = row.querySelector('.status-badge');
        
        // Update status badge
        statusBadge.classList.remove('status-completed', 'status-pending', 'status-dispatch');
        statusBadge.classList.add('status-' + newStatus);
        
        // Update text
        statusBadge.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
        
        // Optional: Show success notification
        console.log('Status changed to:', newStatus);
      });
    });
  </script>
</body>
</html>