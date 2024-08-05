  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_product.php">
              <i class="bi bi-circle"></i><span>Add Products</span>
            </a>
          </li>
          <li>
            <a href="product_list.php">
              <i class="bi bi-circle"></i><span>Products List</span>
            </a>
          </li>

                 </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_category.php">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
          <li>
            <a href="categories_list.php">
              <i class="bi bi-circle"></i><span>Category List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



    </ul>

  </aside><!-- End Sidebar-->
