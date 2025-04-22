<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vertical Navbar with Accordion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .nav-link {
      cursor: pointer;
    }
    .submenu {
      padding-left: 1.5rem;
    }
  </style>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    
    <div class="col-3">
      <div class="list-group" id="menuAccordion">
        
        <!-- Main Item 1 -->
        <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#submenu1" role="button" aria-expanded="false" aria-controls="submenu1">
          Main Item 1
        </a>
        <div class="collapse submenu" id="submenu1" data-bs-parent="#menuAccordion">
          <a href="#" class="list-group-item list-group-item-action">Subitem 1.1</a>
          <a href="#" class="list-group-item list-group-item-action">Subitem 1.2</a>
        </div>

        <!-- Main Item 2 -->
        <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#submenu2" role="button" aria-expanded="false" aria-controls="submenu2">
          Main Item 2
        </a>
        <div class="collapse submenu" id="submenu2" data-bs-parent="#menuAccordion">
          <a href="#" class="list-group-item list-group-item-action">Subitem 2.1</a>
          <a href="#" class="list-group-item list-group-item-action">Subitem 2.2</a>
        </div>

        <!-- Main Item 3 -->
        <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#submenu3" role="button" aria-expanded="false" aria-controls="submenu3">
          Main Item 3
        </a>
        <div class="collapse submenu" id="submenu3" data-bs-parent="#menuAccordion">
          <a href="#" class="list-group-item list-group-item-action ">Subitem 3.1</a>
          <a href="#" class="list-group-item list-group-item-action">Subitem 3.2</a>
        </div>

      </div>
    </div>
    <div class="col-9">
      <!-- Page content goes here -->
      <h3>Welcome!</h3>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>