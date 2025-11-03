<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rie.charge — Article</title>

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
      <header class="mb-4">
        <h1 class="page-title">Create New Article</h1>
        <p class="page-subtitle">Write and publish your new article</p>
      </header>

      <div class="row g-4">
        <!-- Left Column - Main Editor -->
        <div class="col-xl-5">
          <!-- Featured Image Upload -->
          <div class="mb-4">
            <label class="editor-label-compact">Featured Image</label>
            <div class="image-upload-area-compact" onclick="document.getElementById('featuredImage').click()">
              <div class="upload-placeholder-compact">
                <div class="upload-icon-compact">
                  <i class="bi bi-image"></i>
                </div>
                <p class="upload-title-compact">Upload Image</p>
                <p class="upload-info-compact">1200x630px (max 5MB)</p>
                <div class="photo-upload-area" onclick="document.getElementById('fileInput').click()">
                </div>
              </div>
              <input type="file" id="fileInput" accept="image/*" style="display: none;" onchange="handleFileSelect(event)">
            </div>
            <input type="file" id="featuredImage" accept="image/*" style="display: none;">
          </div>

          <!-- Toolbar -->
          <div class="editor-toolbar-compact mb-3">
            <button class="toolbar-btn-compact" title="Bold"><i class="bi bi-type-bold"></i></button>
            <button class="toolbar-btn-compact" title="Italic"><i class="bi bi-type-italic"></i></button>
            <button class="toolbar-btn-compact" title="Link"><i class="bi bi-link-45deg"></i></button>
            <button class="toolbar-btn-compact" title="Image"><i class="bi bi-image"></i></button>
            <button class="toolbar-btn-compact" title="List"><i class="bi bi-list-ul"></i></button>
          </div>

          <!-- Title Input -->
          <div class="mb-3">
            <label class="editor-label-compact">Title *</label>
            <input type="text" class="form-control editor-input-compact" placeholder="Enter article title...">
            <div class="char-counter-compact">0/100</div>
          </div>

          <!-- Short Description -->
          <div class="mb-3">
            <label class="editor-label-compact">Short Description *</label>
            <textarea class="form-control editor-input-compact" rows="3" placeholder="Brief description..."></textarea>
            <div class="char-counter-compact">0/160</div>
          </div>

          <!-- Content Textarea -->
          <div class="mb-3">
            <label class="editor-label-compact">Content *</label>
            <textarea class="form-control editor-textarea-compact" placeholder="Write your article..."></textarea>
            <div class="char-counter-compact">0/<span>5000</span></div>
          </div>
        </div>

        <!-- Middle Column - Settings -->
        <div class="col-xl-3">
          <div class="settings-column-sticky">
            <h3 class="settings-column-title">
              <i class="bi bi-gear-fill"></i>
              Settings
            </h3>
            
            <div class="settings-card-compact">
              <div class="mb-3">
                <label class="settings-label-compact">
                  <i class="bi bi-circle-fill"></i>
                  Status
                </label>
                <select class="form-select settings-select-compact">
                  <option value="draft">Draft</option>
                  <option value="published">Published</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="settings-label-compact">
                  <i class="bi bi-folder"></i>
                  Category
                </label>
                <select class="form-select settings-select-compact">
                  <option>Select Category</option>
                  <option>Health</option>
                  <option>Nutrition</option>
                  <option>Recipes</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="settings-label-compact">
                  <i class="bi bi-tags"></i>
                  Tags
                </label>
                <input type="text" class="form-control settings-input-compact" placeholder="juice, health">
                <small class="form-text-compact">Separate with commas</small>
              </div>

              <div class="mb-3">
                <label class="settings-label-compact">
                  <i class="bi bi-person"></i>
                  Author
                </label>
                <input type="text" class="form-control settings-input-compact" value="Admin">
              </div>

              <div class="mb-3">
                <label class="settings-label-compact">
                  <i class="bi bi-calendar"></i>
                  Publish Date
                </label>
                <input type="datetime-local" class="form-control settings-input-compact">
              </div>

              <!-- SEO Section -->
              <div class="seo-section-compact">
                <h4 class="seo-title-compact">
                  <i class="bi bi-search"></i>
                  SEO
                </h4>
                
                <div class="mb-2">
                  <label class="settings-label-small-compact">Meta Description</label>
                  <textarea class="form-control settings-textarea-compact" rows="3" placeholder="SEO description..."></textarea>
                  <small class="form-text-compact">0/160</small>
                </div>

                <div class="mb-2">
                  <label class="settings-label-small-compact">Focus Keyword</label>
                  <input type="text" class="form-control settings-input-compact" placeholder="main keyword">
                </div>

                <div class="seo-score-compact">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="seo-label-compact">SEO Score</span>
                    <span class="seo-value-compact">0/100</span>
                  </div>
                  <div class="progress-compact">
                    <div class="progress-bar-compact" style="width: 0%"></div>
                  </div>
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="mt-4">
                <button class="btn-save-draft-compact w-100 mb-2">
                  <i class="bi bi-save"></i>
                  Save Draft
                </button>
                <button class="btn-publish-compact w-100">
                  <i class="bi bi-check-circle"></i>
                  Publish
                </button>
              </div>
            </div>
          </div>
        </div>

<!-- Right Column - Recent Posts -->
        <div class="col-xl-4">
          <div class="recent-posts-sticky">
            <h3 class="recent-posts-title">Recent Post</h3>

            <!-- Scrollable Container -->
            <div class="recent-posts-scroll-container">
              
              <!-- Article Card 1 -->
              <div class="article-card-new">
                <div class="article-image-new">
                  <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=600&h=400&fit=crop" alt="Article 1">
                </div>
                <div class="article-content-new">
                  <h4 class="article-title-new">5 Manfaat Cold Pressed Juice untuk Tubuh</h4>
                  <p class="article-desc-new">Sarapan sehat, lezat, dan super cepat untuk memulai aktivitasmu.</p>
                  <div class="article-actions-new">
                    <div class="dropdown">
                      <button class="article-menu-btn-new" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2"></i> Share</a></li>
                        <li><a class="dropdown-item" href="article_edit.php"><i class="bi bi-pencil me-2"></i> Edit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Article Card 2 -->
              <div class="article-card-new">
                <div class="article-image-new">
                  <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?w=600&h=400&fit=crop" alt="Article 2">
                </div>
                <div class="article-content-new">
                  <h4 class="article-title-new">Resep Jus Segar Penambah Energi Harian</h4>
                  <p class="article-desc-new">Dengarkan sinyal tubuh Anda dan berikan apa yang benar-benar dibutuhkannya.</p>
                  <div class="article-actions-new">
                    <div class="dropdown">
                      <button class="article-menu-btn-new" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2"></i> Share</a></li>
                        <li><a class="dropdown-item" href="article_edit.php"><i class="bi bi-pencil me-2"></i> Edit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Article Card 3 -->
              <div class="article-card-new">
                <div class="article-image-new">
                  <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=400&fit=crop" alt="Article 3">
                </div>
                <div class="article-content-new">
                  <h4 class="article-title-new">Kenapa Jus Lebih Sehat dari Minuman Bersoda?</h4>
                  <p class="article-desc-new">Pilihan minuman yang tepat dapat mengubah kualitas hidup Anda.</p>
                  <div class="article-actions-new">
                    <div class="dropdown">
                      <button class="article-menu-btn-new" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2"></i> Share</a></li>
                        <li><a class="dropdown-item" href="article_edit.php"><i class="bi bi-pencil me-2"></i> Edit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Article Card 4 -->
              <div class="article-card-new">
                <div class="article-image-new">
                  <img src="https://images.unsplash.com/photo-1619566636858-adf3ef46400b?w=600&h=400&fit=crop" alt="Article 4">
                </div>
                <div class="article-content-new">
                  <h4 class="article-title-new">7 Jus Detox untuk Bersihkan Tubuh dari Racun</h4>
                  <p class="article-desc-new">Mulai hari dengan detox alami untuk tubuh yang lebih segar.</p>
                  <div class="article-actions-new">
                    <div class="dropdown">
                      <button class="article-menu-btn-new" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2"></i> Share</a></li>
                        <li><a class="dropdown-item" href="article_edit.php"><i class="bi bi-pencil me-2"></i> Edit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Article Card 5 -->
              <div class="article-card-new">
                <div class="article-image-new">
                  <img src="https://images.unsplash.com/photo-1610970881699-44a5587cabec?w=600&h=400&fit=crop" alt="Article 5">
                </div>
                <div class="article-content-new">
                  <h4 class="article-title-new">Tips Membuat Green Smoothie yang Enak</h4>
                  <p class="article-desc-new">Rahasia membuat smoothie hijau yang nikmat dan menyehatkan.</p>
                  <div class="article-actions-new">
                    <div class="dropdown">
                      <button class="article-menu-btn-new" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2"></i> Share</a></li>
                        <li><a class="dropdown-item" href="article_edit.php"><i class="bi bi-pencil me-2"></i> Edit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                      </ul>
                    </div>
                  </div>
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
</body>
</html>