<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Edit Article - Rie.charge</title>

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
        <a href="order.php" class="nav-item d-flex align-items-center">
          <span class="nav-icon me-3">
            <i class="bi bi-cart3"></i>
          </span>
          <span>Order</span>
        </a>
        <a href="article.php" class="nav-item active d-flex align-items-center">
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
      <!-- Header with Back Button -->
      <div class="d-flex align-items-center mb-4">
        <a href="article.php" class="btn-back me-3">
          <i class="bi bi-arrow-left"></i>
        </a>
        <div>
          <h1 class="page-title mb-0">Edit Article</h1>
          <p class="page-subtitle mb-0">Update your article content and settings</p>
        </div>
      </div>

      <!-- Edit Form -->
      <div class="row">
        <div class="col-12">
          <!-- Article Preview Card -->
          <div class="article-preview-card mb-4">
            <div class="row align-items-center">
              <div class="col-md-3">
                <div class="preview-image">
                  <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=600&h=400&fit=crop" alt="Article Preview" id="previewImg">
                  <div class="preview-overlay">
                    <button class="btn-change-image" onclick="document.getElementById('uploadImage').click()">
                      <i class="bi bi-camera-fill"></i>
                      <span>Change Image</span>
                    </button>
                  </div>
                </div>
                <input type="file" id="uploadImage" accept="image/*" style="display: none;" onchange="previewImage(event)">
              </div>
              <div class="col-md-9">
                <div class="preview-info">
                  <span class="preview-badge">
                    <i class="bi bi-eye-fill"></i>
                    Published
                  </span>
                  <h3 class="preview-title">5 Manfaat Cold Pressed Juice untuk Tubuh</h3>
                  <div class="preview-meta">
                    <span><i class="bi bi-calendar3"></i> Created: 24 Oct 2024</span>
                    <span><i class="bi bi-pencil"></i> Last edited: 2 hours ago</span>
                    <span><i class="bi bi-eye"></i> 1,234 views</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Editor Section -->
          <div class="editor-section">
            <!-- Toolbar -->
            <div class="editor-toolbar mb-3">
              <button class="toolbar-btn toolbar-btn-primary" title="Add">
                <i class="bi bi-plus-circle-fill"></i>
              </button>
              <button class="toolbar-btn" title="Image">
                <i class="bi bi-image"></i>
              </button>
              <button class="toolbar-btn" title="Video">
                <i class="bi bi-play-btn"></i>
              </button>
              <button class="toolbar-btn" title="Link">
                <i class="bi bi-link-45deg"></i>
              </button>
              <div class="toolbar-divider"></div>
              <button class="toolbar-btn" title="Align Left">
                <i class="bi bi-text-left"></i>
              </button>
              <button class="toolbar-btn" title="Align Center">
                <i class="bi bi-text-center"></i>
              </button>
              <button class="toolbar-btn" title="Align Right">
                <i class="bi bi-text-right"></i>
              </button>
              <div class="toolbar-divider"></div>
              <button class="toolbar-btn" title="Bold">
                <i class="bi bi-type-bold"></i>
              </button>
              <button class="toolbar-btn" title="Italic">
                <i class="bi bi-type-italic"></i>
              </button>
              <button class="toolbar-btn" title="Underline">
                <i class="bi bi-type-underline"></i>
              </button>
              <button class="toolbar-btn" title="Strike">
                <i class="bi bi-type-strikethrough"></i>
              </button>
              <div class="toolbar-divider"></div>
              <button class="toolbar-btn" title="Heading">
                <i class="bi bi-type-h1"></i>
              </button>
              <button class="toolbar-btn" title="Quote">
                <i class="bi bi-quote"></i>
              </button>
              <button class="toolbar-btn" title="Code">
                <i class="bi bi-code-square"></i>
              </button>
            </div>

            <!-- Form Fields -->
            <div class="row">
              <div class="col-lg-8">
                <!-- Title Input -->
                <div class="mb-4">
                  <label class="form-label editor-label">Article Title</label>
                  <input type="text" class="form-control editor-input" value="5 Manfaat Cold Pressed Juice untuk Tubuh" placeholder="Enter article title...">
                </div>

                <!-- Description Input -->
                <div class="mb-4">
                  <label class="form-label editor-label">Short Description</label>
                  <textarea class="form-control editor-input" rows="2" placeholder="Brief description for preview...">Sarapan sehat, lezat, dan super cepat untuk memulai aktivitasmu.</textarea>
                </div>

                <!-- Content Textarea -->
                <div class="mb-4">
                  <label class="form-label editor-label">Content</label>
                  <textarea class="form-control editor-textarea" rows="15" placeholder="Write your article content...">Cold pressed juice telah menjadi tren minuman sehat yang semakin populer. Berbeda dengan jus biasa yang menggunakan mesin pemeras dengan kecepatan tinggi, cold pressed juice dibuat dengan tekanan tinggi tanpa menghasilkan panas.

Proses ini mempertahankan nutrisi, enzim, dan vitamin yang terkandung dalam buah dan sayuran. Berikut adalah 5 manfaat utama cold pressed juice untuk kesehatan tubuh Anda.

1. Kaya Nutrisi
Cold pressed juice mengandung lebih banyak vitamin, mineral, dan antioksidan dibandingkan jus biasa karena proses pembuatannya yang tidak merusak nutrisi.

2. Mudah Diserap Tubuh
Karena serat telah dipisahkan, nutrisi dalam cold pressed juice dapat diserap tubuh dengan lebih cepat dan efisien.

3. Meningkatkan Energi
Kombinasi vitamin dan mineral dalam cold pressed juice dapat memberikan energi alami tanpa kandungan gula berlebih.

4. Detoksifikasi Alami
Cold pressed juice membantu membersihkan racun dalam tubuh dan mendukung fungsi organ-organ penting seperti hati dan ginjal.

5. Meningkatkan Sistem Kekebalan Tubuh
Kandungan vitamin C dan antioksidan tinggi membantu memperkuat sistem imun untuk melawan penyakit.</textarea>
                </div>
              </div>

              <div class="col-lg-4">
                <!-- Settings Card -->
                <div class="settings-card">
                  <h4 class="settings-title">Article Settings</h4>
                  
                  <!-- Status -->
                  <div class="mb-3">
                    <label class="form-label settings-label">Status</label>
                    <select class="form-select settings-select">
                      <option value="published" selected>Published</option>
                      <option value="draft">Draft</option>
                      <option value="scheduled">Scheduled</option>
                    </select>
                  </div>

                  <!-- Category -->
                  <div class="mb-3">
                    <label class="form-label settings-label">Category</label>
                    <select class="form-select settings-select">
                      <option value="health" selected>Health & Nutrition</option>
                      <option value="recipe">Recipes</option>
                      <option value="tips">Tips & Tricks</option>
                      <option value="lifestyle">Lifestyle</option>
                    </select>
                  </div>

                  <!-- Tags -->
                  <div class="mb-3">
                    <label class="form-label settings-label">Tags</label>
                    <input type="text" class="form-control settings-input" value="juice, health, nutrition" placeholder="Separate with commas">
                  </div>

                  <!-- Author -->
                  <div class="mb-3">
                    <label class="form-label settings-label">Author</label>
                    <input type="text" class="form-control settings-input" value="Admin" readonly>
                  </div>

                  <!-- Publish Date -->
                  <div class="mb-4">
                    <label class="form-label settings-label">Publish Date</label>
                    <input type="datetime-local" class="form-control settings-input" value="2024-10-24T10:00">
                  </div>

                  <!-- SEO Section -->
                  <div class="seo-section">
                    <h5 class="seo-title">
                      <i class="bi bi-search"></i>
                      SEO Settings
                    </h5>
                    <div class="mb-3">
                      <label class="form-label settings-label-small">Meta Description</label>
                      <textarea class="form-control settings-textarea" rows="3" placeholder="SEO meta description...">Discover 5 amazing health benefits of cold pressed juice for your daily nutrition</textarea>
                    </div>
                    <div>
                      <label class="form-label settings-label-small">Focus Keyword</label>
                      <input type="text" class="form-control settings-input-small" value="cold pressed juice" placeholder="Main keyword">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="editor-actions">
              <div class="d-flex gap-3 justify-content-between align-items-center">
                <button class="btn-delete-article">
                  <i class="bi bi-trash3"></i>
                  Delete Article
                </button>
                <div class="d-flex gap-3">
                  <a href="article.php" class="btn-cancel">Cancel</a>
                  <button class="btn-save-draft">
                    <i class="bi bi-floppy"></i>
                    Save Draft
                  </button>
                  <button class="btn-update">
                    <i class="bi bi-check-circle"></i>
                    Update Article
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    function previewImage(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('previewImg').src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    }

    // Auto-save draft every 30 seconds
    let autoSaveInterval;
    function startAutoSave() {
      autoSaveInterval = setInterval(() => {
        console.log('Auto-saving draft...');
        // Add your auto-save logic here
      }, 30000);
    }

    // Start auto-save on page load
    startAutoSave();

    // Clear interval on page unload
    window.addEventListener('beforeunload', () => {
      clearInterval(autoSaveInterval);
    });
  </script>
</body>
</html>