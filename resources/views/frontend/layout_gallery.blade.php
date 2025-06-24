<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captured Moments - Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/css/lightgallery.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <style>
        .gallery-item img {
            width: 100%;
            height: 400px; /* Increased height */
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .filter-button {
            margin-right: 5px;
            margin-bottom: 10px;
        }
        .filter-button.active {
            background-color: #007bff;
            color: white;
        }
        /* Footer Styles */
        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
        }
        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }
        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }
        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }
        .footer-dark ul a:hover {
            opacity: 0.8;
        }
        .footer-dark .item.text {
            margin-bottom: 36px;
        }
        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }
        .footer-dark .item.social {
            text-align: center;
        }
        .footer-dark .item.social > a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255,255,255,0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }
        .footer-dark .item.social > a:hover {
            opacity: 0.9;
        }
        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1 class="sitename">Captured Moments</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home<br></a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="/gallery"><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/gallery">Nature</a></li>
              <li><a href="/gallery">People</a></li>
              <li><a href="/gallery">Architecture</a></li>
              <li><a href="/gallery">Animals</a></li>
              <li><a href="/gallery">Sports</a></li>
              <li><a href="/gallery">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

    <div class="container-fluid mt-5">
        <h2 class="text-center mb-4">Captured Moments | Gallery</h2>
        
        <!-- Filtering and Sorting Options -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Filter by Category:</h5>
                <button class="btn btn-outline-primary filter-button" data-filter="all">All</button>
                <button class="btn btn-outline-primary filter-button" data-filter="nature">Nature</button>
                <button class="btn btn-outline-primary filter-button" data-filter="portrait">Portrait</button>
                <button class="btn btn-outline-primary filter-button" data-filter="urban">Urban</button>
                <button class="btn btn-outline-primary filter-button" data-filter="wildlife">Wildlife</button>
            </div>
            <div class="col-md-6">
                <h5>Sort by:</h5>
                <select class="form-select" id="sort-select">
                    <option value="default">Default</option>
                    <option value="date-asc">Date (Oldest First)</option>
                    <option value="date-desc">Date (Newest First)</option>
                    <option value="name-asc">Name (A-Z)</option>
                    <option value="name-desc">Name (Z-A)</option>
                </select>
            </div>
        </div>

        <div class="row" id="lightgallery">
            <!-- Repeat this block for each image (I'll show 12 examples) -->
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="nature" data-date="2023-01-15" data-name="Serene Lake">
                <a href="https://source.unsplash.com/1600x900/?nature,lake">
                    <img src="images/gallery-1.jpg" alt="Serene Lake" class="img-5">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="portrait" data-date="2023-02-20" data-name="Elegant Portrait">
                <a href="https://source.unsplash.com/1600x900/?portrait">
                    <img src="images/gallery-2.jpg" alt="Elegant Portrait" class="img 6">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="urban" data-date="2023-03-10" data-name="City Lights">
                <a href="https://source.unsplash.com/1600x900/?urban,night">
                    <img src="images/gallery-3.jpg" alt="City Lights" class="img-7">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="wildlife" data-date="2023-04-05" data-name="Majestic Lion">
                <a href="https://source.unsplash.com/1600x900/?wildlife,lion">
                    <img src="images/gallery-4.jpg" alt="Nature" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="nature" data-date="2023-05-12" data-name="Mountain Vista">
                <a href="https://source.unsplash.com/1600x900/?nature,mountain">
                    <img src="images/gallery-5.jpg" alt="Mountain Vista" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="portrait" data-date="2023-06-18" data-name="Candid Smile">
                <a href="https://source.unsplash.com/1600x900/?portrait,smile">
                    <img src="images/gallery-6.jpg" alt="Candid Smile" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="urban" data-date="2023-07-22" data-name="Busy Street">
                <a href="https://source.unsplash.com/1600x900/?urban,street">
                    <img src="images/gallery-7.jpg" alt="Busy Street" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="wildlife" data-date="2023-08-30" data-name="Colorful Parrot">
                <a href="https://source.unsplash.com/1600x900/?wildlife,parrot">
                    <img src="images/gallery-8.jpg" alt="Colorful Parrot" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="nature" data-date="2023-09-14" data-name="Autumn Forest">
                <a href="https://source.unsplash.com/1600x900/?nature,autumn">
                    <img src="images/gallery-9.jpg" alt="Autumn Forest" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="portrait" data-date="2023-10-05" data-name="Pensive Artist">
                <a href="https://source.unsplash.com/1600x900/?portrait,artist">
                    <img src="images/gallery-10.jpg" alt="Pensive Artist" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="urban" data-date="2023-11-11" data-name="Modern Architecture">
                <a href="https://source.unsplash.com/1600x900/?urban,architecture">
                    <img src="images/gallery-11.jpg" alt="Modern Architecture" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 gallery-item mb-4" data-category="wildlife" data-date="2023-12-20" data-name="Playful Dolphins">
                <a href="https://source.unsplash.com/1600x900/?wildlife,dolphin">
                    <img src="images/gallery-12.jpg" alt="Person" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

    <!-- Beautiful Footer -->
    <footer id="footer" class="footer">

<div class="container">
  <div class="copyright text-center ">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Captured Moments</strong> <span>All Rights Reserved</span></p>
  </div>
  <div class="social-links d-flex justify-content-center">
    <a href=""><i class="bi bi-twitter-x"></i></a>
    <a href=""><i class="bi bi-facebook"></i></a>
    <a href=""><i class="bi bi-instagram"></i></a>
    <a href=""><i class="bi bi-linkedin"></i></a>
  </div>
  <div class="credits">
    Designed by <a href="https://github.com/parash0725">Parash Awasthi</a>
  </div>
</div>

</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                speed: 500,
            });

            // Filtering
            $('.filter-button').on('click', function() {
                var filterValue = $(this).attr('data-filter');
                if (filterValue == 'all') {
                    $('.gallery-item').show();
                } else {
                    $('.gallery-item').hide();
                    $('.gallery-item[data-category="' + filterValue + '"]').show();
                }
                // Update active state of filter buttons
                $('.filter-button').removeClass('active');
                $(this).addClass('active');
            });

            // Sorting
            $('#sort-select').on('change', function() {
                var sortValue = $(this).val();
                var $gallery = $('#lightgallery');
                var $items = $gallery.children('.gallery-item');

                $items.sort(function(a, b) {
                    var aValue, bValue;
                    switch(sortValue) {
                        case 'date-asc':
                        case 'date-desc':
                            aValue = new Date($(a).data('date'));
                            bValue = new Date($(b).data('date'));
                            break;
                        case 'name-asc':
                        case 'name-desc':
                            aValue = $(a).data('name').toLowerCase();
                            bValue = $(b).data('name').toLowerCase();
                            break;
                        default:
                            return 0;
                    }
                    
                    if (sortValue.endsWith('asc')) {
                        return aValue > bValue ? 1 : -1;
                    } else {
                        return aValue < bValue ? 1 : -1;
                    }
                });

                $gallery.append($items);
            });

            // Initially show all images
            $('.gallery-item').show();
        });
    </script>
</body>
</html>
