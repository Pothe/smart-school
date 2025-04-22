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
    .active-main {
      background-color: #0d6efd;
      color: white;
    
    }
    .active {
      background-color: #1d66d3;
      color: white;
    
    }
  </style>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    
    <div class="col-3">
      <div class="list-group" id="menuAccordion">
        
        <!-- Main Item 1 -->
        <a class="list-group-item list-group-item-action main-item" data-bs-toggle="collapse" href="#submenu0" role="button" aria-expanded="false" aria-controls="submenu1">
           Dashboard
          </a>
          <div class="collapse submenu p-0" id="submenu0" data-bs-parent="#menuAccordion">
            <a href="#" class="list-group-item  list-group-item-action sub-item ">All Informations</a>
            <a href="#" class="list-group-item list-group-item-action sub-item">Students Information</a>
          </div>
        <a class="list-group-item list-group-item-action main-item" data-bs-toggle="collapse" href="#submenu1" role="button" aria-expanded="false" aria-controls="submenu1">
          Students
        </a>
        <div class="collapse submenu p-0" id="submenu1" data-bs-parent="#menuAccordion">
          <a href="#" class="list-group-item list-group-item-action sub-item ">Subitem 1.1</a>
          <a href="#" class="list-group-item list-group-item-action sub-item">Subitem 1.2</a>
        </div>

        <!-- Main Item 2 -->
        <a class="list-group-item list-group-item-action main-item" data-bs-toggle="collapse" href="#submenu2" role="button" aria-expanded="false" aria-controls="submenu2">
          Main Item 2
        </a>
        <div class="collapse submenu p-0" id="submenu2" data-bs-parent="#menuAccordion">
          <a href="#" class="list-group-item list-group-item-action sub-item">Subitem 2.1</a>
          <a href="#" class="list-group-item list-group-item-action sub-item">Subitem 2.2</a>
        </div>

        <!-- Main Item 3 -->
        <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#submenu3" role="button" aria-expanded="false" aria-controls="submenu3">
          Main Item 3
        </a>
        <div class="collapse submenu p-0" id="submenu3" data-bs-parent="#menuAccordion">
          <a href="#" class="list-group-item list-group-item-action sub-item">Subitem 3.1</a>
          <a href="#" class="list-group-item list-group-item-action sub-item">Subitem 3.2</a>
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
<script>
    // Handle active class on main items
    const mainItems = document.querySelectorAll('.main-item');
    mainItems.forEach(item => {
      item.addEventListener('click', function () {
        mainItems.forEach(i => i.classList.remove('active-main'));
        this.classList.add('active-main');
      });
    });
  
    // Handle active class on subitems
    const subItems = document.querySelectorAll('.sub-item');
    subItems.forEach(item => {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        subItems.forEach(i => i.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>