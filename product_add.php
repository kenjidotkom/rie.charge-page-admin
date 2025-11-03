<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rie.charge — Article</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  
  <style>
    /* ========== CSS Variables ========== */
    :root {
      --sidebar-green: #4a5f4e;
      --sidebar-green-dark: #3d4f41;
      --accent-orange-light: #fbd9a3;
      --accent-orange: #f8b877;
      --green-table: #b8d4a0;
      --green-table-light: #d8eac4;
      --page-bg: #f5f7f9;
      --text-dark: #2d4736;
      --text-medium: #5a6c5e;
      --star-yellow: #f5c842;
    }

    /* ========== Global Styles ========== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background: var(--page-bg);
      color: var(--text-dark);
      overflow-x: hidden;
    }

    /* ========== Layout ========== */
    .dashboard-root {
      min-height: 100vh;
      display: flex;
    }

    /* ========== Sidebar ========== */
    .sidebar {
      width: 280px;
      min-height: 100vh;
      background: var(--sidebar-green);
      color: #fff;
      border-top-right-radius: 32px;
      border-bottom-right-radius: 32px;
      padding: 48px 32px;
      position: relative;
    }

    .brand {
      text-align: center;
      margin-bottom: 48px;
    }

    .brand-icon {
      width: 72px;
      height: 72px;
      background: rgba(255, 255, 255, 0.12);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
      font-size: 36px;
      color: #f8b877;
    }

    .brand-text {
      color: #ffffff;
      font-weight: 700;
      font-size: 22px;
      letter-spacing: 0.3px;
    }

    /* ========== Navigation ========== */
    .nav {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .nav-item {
      background: transparent;
      color: rgba(255, 255, 255, 0.9);
      border-radius: 12px;
      padding: 14px 18px;
      font-weight: 600;
      font-size: 15px;
      text-decoration: none;
      transition: all 0.3s ease;
      position: relative;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .nav-icon {
      width: 36px;
      height: 36px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.08);
      font-size: 18px;
      transition: all 0.3s ease;
    }

    .nav-item:hover {
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
    }

    .nav-item.active {
      background: #ffffff;
      color: var(--sidebar-green);
      border-radius: 50px;
      padding-left: 22px;
      margin: 8px 0;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .nav-item.active .nav-icon {
      background: rgba(74, 95, 78, 0.12);
    }

    /* ========== Main Content ========== */
    .main {
      flex: 1;
      padding: 48px 72px;
      background: var(--page-bg);
    }

    .page-title {
      font-size: 36px;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 32px;
    }

    /* ========== Product Form Layout ========== */
    .product-form-container {
      display: grid;
      grid-template-columns: 1fr 1.5fr;
      gap: 32px;
    }

    /* ========== Form Sections ========== */
    .form-section {
      background: #ffffff;
      border-radius: 24px;
      padding: 32px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    }

    .section-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
      padding-bottom: 16px;
      border-bottom: 2px solid rgba(0, 0, 0, 0.08);
    }

    .section-title {
      font-size: 22px;
      font-weight: 700;
      color: var(--text-dark);
      margin: 0;
    }

    .status-indicator {
      width: 14px;
      height: 14px;
      background: #6ab04c;
      border-radius: 50%;
    }

    /* ========== Photo Upload ========== */
    .photo-upload-area {
      background: rgba(216, 234, 196, 0.3);
      border: 2px dashed rgba(74, 95, 78, 0.3);
      border-radius: 16px;
      padding: 48px 24px;
      text-align: center;
      margin-bottom: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .photo-upload-area:hover {
      background: rgba(216, 234, 196, 0.5);
      border-color: var(--sidebar-green);
    }

    .upload-icon {
      width: 80px;
      height: 80px;
      background: rgba(74, 95, 78, 0.1);
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
      font-size: 36px;
      color: var(--sidebar-green);
    }

    .upload-text {
      font-size: 16px;
      font-weight: 600;
      color: var(--text-medium);
    }

    .btn-add-image {
      background: var(--sidebar-green);
      color: #fff;
      border: none;
      padding: 12px 32px;
      border-radius: 50px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .btn-add-image:hover {
      background: var(--sidebar-green-dark);
      transform: translateY(-2px);
    }

    /* ========== Form Labels & Inputs ========== */
    .form-label {
      font-size: 16px;
      font-weight: 600;
      color: var(--text-dark);
      margin-bottom: 10px;
      display: block;
    }

    .form-input {
      width: 100%;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      padding: 14px 20px;
      font-size: 16px;
      font-weight: 400;
      color: var(--text-dark);
      transition: all 0.3s ease;
      font-family: "Poppins", sans-serif;
      margin-bottom: 20px;
    }

    .form-input:focus {
      border-color: var(--sidebar-green);
      box-shadow: 0 0 0 3px rgba(74, 95, 78, 0.1);
      outline: none;
    }

    .form-input::placeholder {
      color: var(--text-medium);
      opacity: 0.6;
    }

    .form-select {
      width: 100%;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      padding: 14px 20px;
      font-size: 16px;
      font-weight: 600;
      color: var(--text-dark);
      transition: all 0.3s ease;
      font-family: "Poppins", sans-serif;
      background: #fff;
      cursor: pointer;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%234a5f4e' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 20px center;
      padding-right: 48px;
    }

    .form-select:focus {
      border-color: var(--sidebar-green);
      box-shadow: 0 0 0 3px rgba(74, 95, 78, 0.1);
      outline: none;
    }

    /* ========== Description Editor ========== */
    .editor-toolbar {
      background: linear-gradient(90deg, #d8eac4 0%, #c8dbb8 100%);
      border-radius: 12px;
      padding: 10px 16px;
      display: flex;
      align-items: center;
      gap: 6px;
      flex-wrap: wrap;
      margin-bottom: 12px;
    }

    .toolbar-btn {
      width: 36px;
      height: 36px;
      border: none;
      background: transparent;
      color: var(--text-dark);
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .toolbar-btn:hover {
      background: rgba(255, 255, 255, 0.4);
    }

    .toolbar-btn.active {
      background: rgba(74, 95, 78, 0.2);
    }

    .toolbar-divider {
      width: 2px;
      height: 24px;
      background: rgba(74, 95, 78, 0.2);
      margin: 0 4px;
    }

    .description-textarea {
      width: 100%;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      padding: 16px 20px;
      font-size: 16px;
      font-weight: 400;
      color: var(--text-dark);
      min-height: 180px;
      resize: vertical;
      transition: all 0.3s ease;
      font-family: "Poppins", sans-serif;
    }

    .description-textarea:focus {
      border-color: var(--sidebar-green);
      box-shadow: 0 0 0 3px rgba(74, 95, 78, 0.1);
      outline: none;
    }

    /* ========== Discount Type Radio ========== */
    .discount-options {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .radio-option {
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    .radio-option input[type="radio"] {
      width: 20px;
      height: 20px;
      accent-color: var(--sidebar-green);
      cursor: pointer;
    }

    .radio-option label {
      font-size: 16px;
      font-weight: 600;
      color: var(--text-dark);
      cursor: pointer;
    }

    /* ========== Action Buttons ========== */
    .action-buttons {
      display: flex;
      gap: 16px;
      margin-top: 32px;
    }

    .btn-primary {
      background: var(--sidebar-green);
      color: #fff;
      border: none;
      padding: 14px 48px;
      border-radius: 50px;
      font-size: 17px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(74, 95, 78, 0.3);
    }

    .btn-primary:hover {
      background: var(--sidebar-green-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(74, 95, 78, 0.4);
    }

    .btn-secondary {
      background: transparent;
      color: var(--text-dark);
      border: 2px solid rgba(0, 0, 0, 0.1);
      padding: 14px 48px;
      border-radius: 50px;
      font-size: 17px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: rgba(0, 0, 0, 0.05);
      border-color: var(--sidebar-green);
      color: var(--sidebar-green);
    }

    /* ========== Responsive Design ========== */
    @media (max-width: 1200px) {
      .main {
        padding: 40px 48px;
      }
      
      .product-form-container {
        gap: 24px;
      }
    }

    @media (max-width: 992px) {
      .sidebar {
        width: 240px;
        padding: 32px 24px;
      }

      .main {
        padding: 32px 36px;
      }

      .product-form-container {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .dashboard-root {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
        min-height: auto;
        border-radius: 0 0 24px 24px;
        padding: 24px 20px;
      }

      .brand {
        margin-bottom: 24px;
      }

      .nav {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
      }

      .nav-item {
        justify-content: center;
        padding: 12px 16px;
      }

      .nav-item.active {
        border-radius: 12px;
      }

      .main {
        padding: 24px 20px;
      }

      .page-title {
        font-size: 28px;
        margin-bottom: 24px;
      }

      .form-section {
        padding: 24px;
      }

      .action-buttons {
        flex-direction: column;
      }

      .btn-primary,
      .btn-secondary {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="dashboard-root">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="brand">
        <div class="brand-icon">
          <i class="bi bi-lightning-charge-fill"></i>
        </div>
        <div class="brand-text">rie.charge</div>
      </div>
      
      <nav class="nav">
        <a href="index.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-1">
            <i class="bi bi-grid-fill"></i>
          </span>
          <span>Dashboard</span>
        </a>
         <a href="order.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-1">
            <i class="bi bi-cart3"></i>
          </span>
          <span>Order</span>
        </a>
        <a href="article.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-1">
            <i class="bi bi-journal-text"></i>
          </span>
          <span>Article</span>
        </a>
        <a href="product.php" class="nav-item active">
          <span class="nav-icon"><i class="bi bi-box-seam-fill"></i></span>
          <span>Product</span>
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
      <h1 class="page-title">Add New Product</h1>

      <div class="product-form-container">
        <!-- Left Column -->
        <div>
          <!-- Product Media Section -->
          <div class="form-section">
            <div class="section-header">
              <h2 class="section-title">Product Media</h2>
            </div>
            
            <label class="form-label">Photo Product</label>
            <div class="photo-upload-area" onclick="document.getElementById('fileInput').click()">
              <div class="upload-icon">
                <i class="bi bi-image"></i>
              </div>
              <p class="upload-text">Click to upload product image</p>
            </div>
            <input type="file" id="fileInput" accept="image/*" style="display: none;" onchange="handleFileSelect(event)">
            
            <button class="btn-add-image">
              <i class="bi bi-plus-circle-fill"></i>
              Add More Image
            </button>
          </div>

          <!-- Status Section -->
          <div class="form-section" style="margin-top: 24px;">
            <div class="section-header">
              <h2 class="section-title">Status</h2>
              <span class="status-indicator"></span>
            </div>
            
            <label class="form-label">Set status</label>
            <select class="form-select">
              <option value="published">Published</option>
              <option value="draft">Draft</option>
              <option value="archived">Archived</option>
            </select>
          </div>

          <!-- Inventory Section -->
          <div class="form-section" style="margin-top: 24px;">
            <div class="section-header">
              <h2 class="section-title">Inventory</h2>
            </div>
            
            <label class="form-label">ID</label>
            <input type="text" class="form-input" placeholder="Enter product ID" value="PRD-001">
            
            <label class="form-label">Qty</label>
            <select class="form-select">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
              <option value="custom">Custom</option>
            </select>
          </div>
        </div>

        <!-- Right Column -->
        <div>
          <!-- General Information Section -->
          <div class="form-section">
            <div class="section-header">
              <h2 class="section-title">General Information</h2>
            </div>
            
            <label class="form-label">Product Name</label>
            <input type="text" class="form-input" placeholder="Enter product name">
            
            <label class="form-label">Description</label>
            <div class="editor-toolbar">
              <button class="toolbar-btn" title="Add"><i class="bi bi-plus-circle-fill"></i></button>
              <button class="toolbar-btn" title="Image"><i class="bi bi-image-fill"></i></button>
              <button class="toolbar-btn" title="Video"><i class="bi bi-play-circle-fill"></i></button>
              <button class="toolbar-btn" title="Table"><i class="bi bi-table"></i></button>
              <div class="toolbar-divider"></div>
              <button class="toolbar-btn" title="Align Left"><i class="bi bi-text-left"></i></button>
              <button class="toolbar-btn" title="Align Center"><i class="bi bi-text-center"></i></button>
              <button class="toolbar-btn" title="Align Right"><i class="bi bi-text-right"></i></button>
              <div class="toolbar-divider"></div>
              <button class="toolbar-btn" title="Italic"><i class="bi bi-type-italic"></i></button>
              <button class="toolbar-btn" title="Bold"><i class="bi bi-type-bold"></i></button>
              <button class="toolbar-btn" title="Underline"><i class="bi bi-type-underline"></i></button>
            </div>
            <textarea class="description-textarea" placeholder="Write product description..."></textarea>
          </div>

          <!-- Pricing Section -->
          <div class="form-section" style="margin-top: 24px;">
            <div class="section-header">
              <h2 class="section-title">Pricing</h2>
            </div>
            
            <label class="form-label">Base Price</label>
            <input type="text" class="form-input" placeholder="Rp 0">
            
            <label class="form-label">Discount Type</label>
            <div class="discount-options">
              <div class="radio-option">
                <input type="radio" id="percentage" name="discount" checked>
                <label for="percentage">Percentage (%)</label>
              </div>
              <div class="radio-option">
                <input type="radio" id="fixed" name="discount">
                <label for="fixed">Fixed Amount</label>
              </div>
              <div class="radio-option">
                <input type="radio" id="none" name="discount">
                <label for="none">None</label>
              </div>
            </div>
            
            <label class="form-label">Discount Value</label>
            <input type="text" class="form-input" placeholder="Enter discount value">
          </div>

          <!-- Action Buttons -->
          <div class="action-buttons">
            <button class="btn-primary">Add Product</button>
            <button class="btn-secondary">Cancel</button>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  
  <script>
    function handleFileSelect(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const uploadArea = document.querySelector('.photo-upload-area');
          uploadArea.innerHTML = `
            <img src="${e.target.result}" alt="Preview" style="max-width: 100%; max-height: 200px; border-radius: 12px;">
          `;
        };
        reader.readAsDataURL(file);
      }
    }

    // Toolbar button interactions
    document.querySelectorAll('.toolbar-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        this.classList.toggle('active');
      });
    });
  </script>
</body>
</html>