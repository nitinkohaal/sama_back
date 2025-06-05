
  // Simple JS to toggle views
  const dashboardContent = document.getElementById('dashboard-content');
  const productListContent = document.getElementById('product-list-content');
  const addProduct_acess= document.getElementById('add-product-acess');
  const addProduct_gears = document.getElementById('add-product-gears');
  const add_bikemodel = document.getElementById('add-bike-model');

    document.getElementById('dashboard-link').addEventListener('click', function(e) {
    e.preventDefault();
    dashboardContent.style.display = 'block';
    addProduct_acess.style.display = 'none';
    addProduct_gears.style.display = 'none';
    add_bikemodel.style.display = 'none';
    productListContent.style.display = 'none';
    setActiveLink(this);
  });

  document.getElementById('product-list-link').addEventListener('click', function(e) {
    e.preventDefault();
    dashboardContent.style.display = 'none';
    addProduct_acess.style.display = 'none';
    addProduct_gears.style.display = 'none';
    add_bikemodel.style.display = 'none';

    productListContent.style.display = 'block';
    setActiveLink(this);
  });

  document.getElementById('add-acces-link').addEventListener('click', function(e) {
    e.preventDefault();
    dashboardContent.style.display = 'none';
    productListContent.style.display = 'none';
    addProduct_acess.style.display = 'block';
    add_bikemodel.style.display = 'none';

    addProduct_gears.style.display = 'none';
    setActiveLink(this);
  });
  document.getElementById('add-gears-link').addEventListener('click', function(e) {
    e.preventDefault();
    dashboardContent.style.display = 'none';
    productListContent.style.display = 'none';
    addProduct_acess.style.display = 'none';
    add_bikemodel.style.display = 'none';

    addProduct_gears.style.display = 'block';

    setActiveLink(this);
  });


  document.getElementById('add-bike-link').addEventListener('click', function(e) {
    e.preventDefault();
    dashboardContent.style.display = 'none';
    productListContent.style.display = 'none';
    addProduct_acess.style.display = 'none';
    addProduct_gears.style.display = 'none';
    add_bikemodel.style.display = 'block';

    setActiveLink(this);
  });

  function setActiveLink(activeLink) {
    document.querySelectorAll('.sidebar nav a').forEach(link => {
      
      link.classList.remove('active');
    });
    activeLink.classList.add('active');
  }



//  <---------------- logout admin panel  
  
  const modal = document.getElementById('logout-modal');
function logout_btn() {

  modal.style.display = 'flex';
  
  

  }

  function closeModal() {
    const modal = document.getElementById('logout-modal');
    modal.style.display = 'none';
  }

  function logout() {
    window.location.href = 'logout.php';
  }

  // load all product  from database


document.addEventListener('DOMContentLoaded', () => {
  const select = document.getElementById('category-select');
  const contentDiv = document.getElementById('product-all');

  function loadProducts(category) {
    // Fade out current content
    contentDiv.classList.add('fade-out');

    setTimeout(() => {
      // Load new content
      fetch('load_products.php?category=' + encodeURIComponent(category))
        .then(res => res.text())
        .then(html => {
          contentDiv.innerHTML = html;
          // Fade in new content
          contentDiv.classList.remove('fade-out');
          contentDiv.classList.add('fade-in');

          // Remove fade-in after it's done to reset
          setTimeout(() => contentDiv.classList.remove('fade-in'), 300);
        })
        .catch(err => {
          contentDiv.innerHTML = '<p style="color:red;">Failed to load products.</p>';
          contentDiv.classList.remove('fade-out');
        });
    }, 300); // Delay must match CSS transition duration
  }

  // Initial load
  loadProducts(select.value);

  // On category change
  select.addEventListener('change', () => {
    loadProducts(select.value);
  });
});





// show the accessories product when page reload

  // On page load, check if accessory was added
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const isAdded = urlParams.get("msg") === "accessory_added";

    if (isAdded) {
      // Show All Products tab
      document.getElementById("dashboard-content").style.display = "none";
      document.getElementById("add-product-acess").style.display = "none";
      document.getElementById("add-product-gears").style.display = "none";
      document.getElementById("product-list-content").style.display = "block";

      // Set active link
      setActiveLink(document.getElementById("product-list-link"));

      // Trigger product reload
      document.getElementById("category-select").value = "accessories";
      document.getElementById("category-select").dispatchEvent(new Event("change"));

      // Show alert
      alert("Accessory added successfully!");

      // Remove ?msg=accessory_added from the URL without reloading
      if (window.history.replaceState) {
        const cleanURL = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanURL);
      }
    }
  });


  // end show the accessories product when page reload



  // edit the accessories product

  
  // const editAccessoriesBtns = document.querySelectorAll(".edit-accessory-btn");
    
  //   editAccessoriesBtns.forEach( btn => {

   
  //     });

  //   });


  function xyz(btn) {

  console.log("Button clicked");

  // Get data-* attributes from the clicked button
  const id = btn.dataset.accessoryId;
  const name = btn.dataset.accessoryName;
  const modelId = btn.dataset.accessoryModelId;
  const image = btn.dataset.accessoryImage;

  // Fill modal form inputs
  document.getElementById("accessory_id").value = id;
  document.getElementById("accessory_name").value = name;
  document.getElementById("accessory_bike_model").value = modelId;
  document.getElementById("accessory_image").src = image;




    }

  




















  // add gear show the gears product 

    // On page load, check if accessory was added
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const isAdded = urlParams.get("msg") === "gears_added";

    if (isAdded) {
      // Show All Products tab
      document.getElementById("dashboard-content").style.display = "none";
      document.getElementById("add-product-acess").style.display = "none";
      document.getElementById("add-product-gears").style.display = "none";
      document.getElementById("product-list-content").style.display = "block";

      // Set active link
      setActiveLink(document.getElementById("product-list-link"));

      // Trigger product reload
      document.getElementById("category-select").value = "gears";
      document.getElementById("category-select").dispatchEvent(new Event("change"));

      // Show alert
      alert("Gears added successfully!");

      // Remove ?msg=accessory_added from the URL without reloading
      if (window.history.replaceState) {
        const cleanURL = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanURL);
      }
    }
  });


  
    // On page load, check if bike_model was added
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const isAdded = urlParams.get("msg") === "bike_model_added";

    if (isAdded) {
      // Show All Products tab
      document.getElementById("dashboard-content").style.display = "none";
      document.getElementById("add-product-acess").style.display = "none";
      document.getElementById("add-product-gears").style.display = "none";
      document.getElementById("product-list-content").style.display = "none";
      document.getElementById("add-bike-model").style.display = "block";

      // Set active link
      setActiveLink(document.getElementById("add-bike-link"));

      // Trigger product reload
      document.getElementById("category-select").dispatchEvent(new Event("change"));

      // Show alert
      alert("Bike model added successfully!");

      // Remove ?msg=accessory_added from the URL without reloading
      if (window.history.replaceState) {
        const cleanURL = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanURL);
      }
    }
  });



    // On page load, check if bike_model_update was 
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const isAdded = urlParams.get("msg") === "bike_model_updated";

    if (isAdded) {
      // Show All Products tab
      document.getElementById("dashboard-content").style.display = "none";
      document.getElementById("add-product-acess").style.display = "none";
      document.getElementById("add-product-gears").style.display = "none";
      document.getElementById("product-list-content").style.display = "none";
      document.getElementById("add-bike-model").style.display = "block";

      // Set active link
      setActiveLink(document.getElementById("add-bike-link"));

      // Trigger product reload
      document.getElementById("category-select").dispatchEvent(new Event("change"));

      // Show alert
      alert("Bike model updated successfully!");

      // Remove ?msg=accessory_added from the URL without reloading
      if (window.history.replaceState) {
        const cleanURL = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanURL);
      }
    }
  });



// add content for edit bike related 
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById('editBikeModal');
  const editForm = document.getElementById('editBikeForm');

  document.querySelectorAll(".edit-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      document.getElementById('editBikeId').value = btn.dataset.id;
      document.getElementById('editBikeName').value = btn.dataset.name;
      document.getElementById('editBikeImage').src = btn.dataset.image;
    });
  });

  modal.addEventListener('hidden.bs.modal', () => {
    // Clear the form inputs when the modal is closed
    editForm.reset();
  });
});



    // On page load, check if bike_model delete was 
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const isAdded = urlParams.get("msg") === "bike_model_deleted";

    if (isAdded) {
      // Show All Products tab
      document.getElementById("dashboard-content").style.display = "none";
      document.getElementById("add-product-acess").style.display = "none";
      document.getElementById("add-product-gears").style.display = "none";
      document.getElementById("product-list-content").style.display = "none";
      document.getElementById("add-bike-model").style.display = "block";

      // Set active link
      setActiveLink(document.getElementById("add-bike-link"));

      // Trigger product reload
      document.getElementById("category-select").dispatchEvent(new Event("change"));

      // Show alert
      alert("Bike model delete successfully!");

      // Remove ?msg=accessory_added from the URL without reloading
      if (window.history.replaceState) {
        const cleanURL = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, cleanURL);
      }
    }
  });



