<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rie.charge — Product</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  
  <style>
    /* Force product page styles */
    .add-product-card {
      background: linear-gradient(135deg, #d8eac4 0%, #c8dbb8 100%) !important;
      border-radius: 24px !important;
      padding: 32px 40px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08) !important;
      margin-bottom: 32px !important;
    }

    .add-product-content {
      display: flex !important;
      align-items: center !important;
      gap: 24px !important;
    }

    .add-product-icon {
      width: 72px !important;
      height: 72px !important;
      background: rgba(74, 95, 78, 0.15) !important;
      border-radius: 50% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 36px !important;
      color: #4a5f4e !important;
    }

    .add-product-title {
      font-size: 24px !important;
      font-weight: 700 !important;
      color: #2d4736 !important;
      margin: 0 0 6px 0 !important;
    }

    .add-product-subtitle {
      font-size: 16px !important;
      font-weight: 500 !important;
      color: #5a6c5e !important;
      margin: 0 !important;
    }

    .btn-add-product {
      background: #4a5f4e !important;
      color: #fff !important;
      border: none !important;
      padding: 14px 36px !important;
      border-radius: 50px !important;
      font-size: 17px !important;
      font-weight: 700 !important;
      text-decoration: none !important;
      display: inline-flex !important;
      align-items: center !important;
      box-shadow: 0 4px 12px rgba(74, 95, 78, 0.3) !important;
      transition: all 0.3s ease !important;
    }

    .btn-add-product:hover {
      background: #3d4f41 !important;
      color: #fff !important;
      transform: translateY(-2px) !important;
    }

    .products-grid {
      display: grid !important;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)) !important;
      gap: 24px !important;
    }

    .product-card {
      background: #ffffff !important;
      border-radius: 20px !important;
      overflow: hidden !important;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08) !important;
      transition: all 0.3s ease !important;
    }

    .product-card:hover {
      transform: translateY(-4px) !important;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12) !important;
    }

    .product-card-header {
      padding: 16px 20px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      background: rgba(184, 212, 160, 0.15) !important;
    }

    .product-status {
      padding: 6px 16px !important;
      border-radius: 20px !important;
      font-size: 14px !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
    }

    .status-published {
      background: rgba(106, 176, 76, 0.2) !important;
      color: #4a8c2a !important;
    }

    .status-draft {
      background: rgba(255, 193, 7, 0.2) !important;
      color: #d68910 !important;
    }

    .status-archived {
      background: rgba(189, 189, 189, 0.3) !important;
      color: #6c757d !important;
    }

    .product-menu-btn {
      background: transparent !important;
      border: none !important;
      font-size: 20px !important;
      color: #2d4736 !important;
      padding: 4px 8px !important;
      border-radius: 8px !important;
    }

    .product-menu-btn::after {
      display: none !important;
    }

    .product-image {
      width: 100% !important;
      height: 240px !important;
      overflow: hidden !important;
      background: #f0f0f0 !important;
    }

    .product-image img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
    }

    .product-details {
      padding: 24px !important;
    }

    .product-name {
      font-size: 20px !important;
      font-weight: 700 !important;
      color: #2d4736 !important;
      margin: 0 0 6px 0 !important;
    }

    .product-id {
      font-size: 14px !important;
      font-weight: 600 !important;
      color: #5a6c5e !important;
      margin: 0 0 20px 0 !important;
    }

    .product-meta {
      display: flex !important;
      gap: 24px !important;
      padding-top: 16px !important;
      border-top: 2px solid rgba(0, 0, 0, 0.08) !important;
    }

    .meta-item {
      display: flex !important;
      flex-direction: column !important;
      gap: 4px !important;
    }

    .meta-label {
      font-size: 13px !important;
      font-weight: 600 !important;
      color: #5a6c5e !important;
      text-transform: uppercase !important;
    }

    .meta-value {
      font-size: 18px !important;
      font-weight: 700 !important;
      color: #2d4736 !important;
    }

    @media (max-width: 768px) {
      .add-product-card {
        flex-direction: column !important;
        text-align: center !important;
      }

      .add-product-content {
        flex-direction: column !important;
      }

      .products-grid {
        grid-template-columns: 1fr !important;
      }
    }
  </style>
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
        <a href="product.php" class="nav-item active d-flex align-items-center">
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
        <h1 class="page-title">Product Management</h1>
      </header>

      <!-- Add Product Card -->
      <div class="add-product-card mb-4">
        <div class="add-product-content">
          <div class="add-product-icon">
            <i class="bi bi-plus-circle-fill"></i>
          </div>
          <div class="add-product-text">
            <h3 class="add-product-title">Add New Product</h3>
            <p class="add-product-subtitle">Create a new product for your store</p>
          </div>
        </div>
        <a href="product_add.php" class="btn-add-product">
          <i class="bi bi-plus-lg me-2"></i>
          Add Product
        </a>
      </div>

      <!-- Products Grid -->
      <div class="products-grid">
        <!-- Product Card 1 -->
        <div class="product-card">
          <div class="product-card-header">
            <span class="product-status status-published">Published</span>
            <div class="dropdown">
              <button class="product-menu-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="product-edit.php?id=1"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
              </ul>
            </div>
          </div>
          
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=400&h=300&fit=crop" alt="Cold Pressed Juice">
          </div>
          
          <div class="product-details">
            <h4 class="product-name">Cold Pressed Juice</h4>
            <p class="product-id">PRD-001</p>
            <div class="product-meta">
              <div class="meta-item">
                <span class="meta-label">Price</span>
                <span class="meta-value">Rp 45.000</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Stock</span>
                <span class="meta-value">150</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Card 2 -->
        <div class="product-card">
          <div class="product-card-header">
            <span class="product-status status-published">Published</span>
            <div class="dropdown">
              <button class="product-menu-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="product-edit.php?id=2"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
              </ul>
            </div>
          </div>
          
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?w=400&h=300&fit=crop" alt="Fitshot">
          </div>
          
          <div class="product-details">
            <h4 class="product-name">Fitshot Healthy Juice</h4>
            <p class="product-id">PRD-002</p>
            <div class="product-meta">
              <div class="meta-item">
                <span class="meta-label">Price</span>
                <span class="meta-value">Rp 35.000</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Stock</span>
                <span class="meta-value">200</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Card 3 -->
        <div class="product-card">
          <div class="product-card-header">
            <span class="product-status status-draft">Draft</span>
            <div class="dropdown">
              <button class="product-menu-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="product-edit.php?id=3"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
              </ul>
            </div>
          </div>
          
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=300&fit=crop" alt="Asinan Kuah">
          </div>
          
          <div class="product-details">
            <h4 class="product-name">Asinan Kuah Fresh</h4>
            <p class="product-id">PRD-003</p>
            <div class="product-meta">
              <div class="meta-item">
                <span class="meta-label">Price</span>
                <span class="meta-value">Rp 25.000</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Stock</span>
                <span class="meta-value">80</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Card 4 -->
        <div class="product-card">
          <div class="product-card-header">
            <span class="product-status status-published">Published</span>
            <div class="dropdown">
              <button class="product-menu-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="product-edit.php?id=4"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
              </ul>
            </div>
          </div>
          
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1621506289937-a8e4df240d0b?w=400&h=300&fit=crop" alt="Green Smoothie">
          </div>
          
          <div class="product-details">
            <h4 class="product-name">Green Detox Smoothie</h4>
            <p class="product-id">PRD-004</p>
            <div class="product-meta">
              <div class="meta-item">
                <span class="meta-label">Price</span>
                <span class="meta-value">Rp 50.000</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Stock</span>
                <span class="meta-value">120</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Card 5 -->
        <div class="product-card">
          <div class="product-card-header">
            <span class="product-status status-published">Published</span>
            <div class="dropdown">
              <button class="product-menu-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="product-edit.php?id=5"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
              </ul>
            </div>
          </div>
          
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1610970881699-44a5587cabec?w=400&h=300&fit=crop" alt="Orange Juice">
          </div>
          
          <div class="product-details">
            <h4 class="product-name">Fresh Orange Juice</h4>
            <p class="product-id">PRD-005</p>
            <div class="product-meta">
              <div class="meta-item">
                <span class="meta-label">Price</span>
                <span class="meta-value">Rp 30.000</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Stock</span>
                <span class="meta-value">180</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Card 6 -->
        <div class="product-card">
          <div class="product-card-header">
            <span class="product-status status-archived">Archived</span>
            <div class="dropdown">
              <button class="product-menu-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="product-edit.php?id=6"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
              </ul>
            </div>
          </div>
          
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1610970881699-44a5587cabec?w=400&h=300&fit=crop" alt="Orange Juice">
          </div>
          
          <div class="product-details">
            <h4 class="product-name">Berry Mix Smoothie</h4>
            <p class="product-id">PRD-006</p>
            <div class="product-meta">
              <div class="meta-item">
                <span class="meta-label">Price</span>
                <span class="meta-value">Rp 55.000</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Stock</span>
                <span class="meta-value">0</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>