<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&family=Open+Sans:wght@300;400;500;600;700&family=Over+the+Rainbow&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="col-md-3">
            <div class="main-logo">
              <a href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main-logo.png" alt="main-logo">
              </a>
            </div>
          </div>

          <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><svg class="menu" width="24" height="24"><use xlink:href="#menu"></use></svg></button>
          
          <!-- off canvas -->
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-end">

              <div class="col-md-6">
                <ul id="header-nav" class="navbar-nav justify-content-center d-flex flex-grow-1 list-unstyled text-uppercase">
                  <li class="nav-item pe-5">
                    <a href="#" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a href="#about" class="nav-link active">About</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a href="#popular-products" class="nav-link">Shop</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a href="#recent-collections" class="nav-link">Collection</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a href="#latest-blog" class="nav-link">Blogs</a>
                  </li>
                 
                </ul>
              </div>

            </div>
          </div>
          <!-- / off canvas -->

          <div class="col-md-3">
            <div class="right-block d-flex justify-content-end">
              <div id="search-bar" class="border-right me-2 pe-1">
                <form action="" autocomplete="on">
                <input id="search" name="search" type="text" placeholder="What're we looking for ?">
                <button type="submit">
                  <svg class="search" width="24" height="24">
                    <use xlink:href="#search"></use>
                  </svg>
                </button>
                </form>
              </div>
              <div class="user-items d-flex gap-3">
                <a href="#">
                  <svg class="user" width="24" height="24"><use xlink:href="#user"></use></svg>
                </a>
                <a href="#">
                  <svg class="like" width="24" height="24"><use xlink:href="#like"></use></svg>
                </a>
                <a href="cart.html">
                  <svg class="shopping-bag" width="24" height="24"><use xlink:href="#shopping-bag"></use></svg>
                </a>
              </div>
            </div>
          </div>

        </div>
      </nav>

