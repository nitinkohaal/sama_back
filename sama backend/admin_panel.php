<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
  header('Location: admin_login.php');

  exit;
}

require 'db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Panel - Bike Accessories</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <!-- logout modal  -->

  <div class="logout-modal" id="logout-modal" style="display: none;">
    <div class="modal-content">
      <p>Are you sure you want to logout?</p>
      <div class="modal-buttons">
        <button onclick="closeModal()" class="cancel-button">Cancel</button>
        <button onclick="logout()" class="logout-button">Logout</button>
      </div>
    </div>
  </div>



  <div class="container-fluid d-flex main_admin p-0">




    <aside class="sidebar">
      <h2><?php echo $_SESSION['admin_username']; ?></h2>
      <nav>
        <a href="#" id="dashboard-link" class="active">Dashboard</a>
        <a href="#" id="add-bike-link">Bike Model</a>
        <a href="#" id="product-list-link">All products</a>
        <a href="#" id="add-acces-link">Add New Accessories</a>
        <a href="#" id="add-gears-link">Add New gears</a>
        <a href="#">Orders</a>
        <a href="#">Customers</a>
        <a href="#">Settings</a>

      </nav>
      <button style="margin-top: 100px;" onclick="logout_btn()" class="logout-button"> logout</button>

    </aside>

    <main class="main-content">
      <header>
        <h1>Dashboard</h1>

      </header>

      <section class="content-area" id="dashboard-content" style="display:block;">
        <h2>Welcome to the <?php echo $_SESSION['admin_username']; ?></h2>
        <p>Use the sidebar to manage your products and orders.</p>
      </section>




      <section class="content-area" id="product-list-content" style="display:none;">
        <div class="product-list-header">
          <h2>All Products</h2>


          <select id="category-select">
            <option value="accessories">Accessories</option>
            <option value="gears">Gears</option>
            <option value="apparel">Apparel</option>
          </select>





        </div>

        <div id="product-all">



        </div>



      </section>


      <!-- add product section acess  -->

      <section class="content-area" id="add-product-acess" style="display:none;">
        <h2>Add New Accessories</h2>
        <form id="add-product-form" action="./add_accessories.php" enctype="multipart/form-data" method="post">
          <label for="name">Product Name</label>

          <input type="text" id="name" name="name" placeholder="Enter product name" required />

          <!-- <select name="bike_model_id" required>
            <option value="">Select Model</option>
            <?php
            $stmt = $pdo->query("SELECT id, model_name FROM bike_models ORDER BY model_name ASC");
            while ($row = $stmt->fetch()) {
              echo "<option value='{$row['id']}'>{$row['model_name']}</option>";
            }
            ?>
          </select> -->


          <label for="description">sub heading</label>
          <input type="text" id="description" name="sub_heading" placeholder="Enter product sub_heading" required />

          <label for="description">Description</label>
          <textarea id="description" name="description" placeholder="Enter product description" required></textarea>

          <label for="price">Price (₹)</label>
          <input type="number" id="price" name="price" min="0" step="0.01" placeholder="Enter price" required />

          <label for="stock">Stock Quantity</label>
          <input type="number" id="stock" name="stock" min="0" placeholder="Enter stock quantity" />
          <label>Upload Images:</label>

          <input type="file" name="images[]" multiple accept="image/*" required>
          <button type="submit">Add Product</button>
        </form>
      </section>

      <!-- add product section gears -->
      <section class="content-area" id="add-product-gears" style="display:none;">
        <h2>Add New gears</h2>
        <form id="add-product-form" action="./add_gears.php" enctype="multipart/form-data" method="post">
          <label for="name">Product Name</label>
          <input type="text" id="name" name="name" placeholder="Enter product name" required />

          <label for="description">sub heading</label>
          <input type="text" id="description" name="sub_heading" placeholder="Enter product sub_heading" required />

          <label for="description">Description</label>
          <textarea id="description" name="description" placeholder="Enter product description" required></textarea>

          <label for="price">Price (₹)</label>
          <input type="number" id="price" name="price" min="0" step="0.01" placeholder="Enter price" required />

          <label for="stock">Stock Quantity</label>
          <input type="number" id="stock" name="stock" min="0" placeholder="Enter stock quantity" />
          <label>Upload Images:</label>

          <input type="file" name="images[]" multiple accept="image/*" required>
          <button type="submit">Add Product</button>
        </form>
      </section>


      <!-- add bike model  -->

      <section class="content-area " id="add-bike-model" style="display:none;">
      <div class="add-bike-model d-flex flex-column gap-4   align-items-center ">

        <h2 class="font-weight-bold">Add Bike Model</h2>
        <form id="add-product-form" action="./add_bike_model.php" enctype="multipart/form-data" method="post">
          <label for="name">Bike Model</label>
          <input type="text" id="name" name="name" placeholder="Enter product name" required />

          <input type="file" name="image" accept="image/*" required>
          <button type="submit">Add Product</button>

        </form>

        </div> 
      
      <div class="show-bike-model d-flex flex-column gap-4 mt-5">
          <h3>Bike Models</h3>

          <div class="bike-model-container d-flex gap-4 flex-wrap ">

            <?php
            $stmt = $pdo->query("SELECT * FROM bike_models");
            while ($bike_data = $stmt->fetch()) :

            ?>

              <div class="bike-model">

                <img src="<?php echo $bike_data['image_path']; ?>" alt=" <?php echo $bike_data['model_name']; ?>image">
                <h3><?php echo $bike_data['model_name']; ?> </h3>

                <div class="bike-model-buttons">
                  <a href="#"
                    class="btn btn-primary btn-sm edit-btn"
                    data-id="<?= $bike_data['id'] ?>"
                    data-name="<?= htmlspecialchars($bike_data['model_name']) ?>"
                    data-image="<?= $bike_data['image_path'] ?>"
                    data-bs-toggle="modal"
                    data-bs-target="#editBikeModal">Edit</a>

                  <a href="./delete_bike_model.php?id=<?= $bike_data['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </div>


              </div>


            <?php endwhile; ?>

          </div>

        </div>

        



      </section>

      <div class="modal fade" id="editBikeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <form id="editBikeForm" action="./update_bike_model.php" enctype="multipart/form-data" method="post">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Bike</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">

                <input type="hidden" name="id" id="editBikeId">

                <div class="mb-3">
                  <label for="editBikeName" class="form-label">Bike Name</label>
                  <input type="text" class="form-control" name="name" id="editBikeName" required>
                </div>

                <div class="mb-3">
                  <label>Current Image</label><br>
                  <img id="editBikeImage" src="" width="100" class="mb-2"><br>
                  <label for="editBikeNewImage">Change Image (optional)</label>
                  <input type="file" class="form-control" name="image" id="editBikeNewImage">
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>





    </main>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="./javascript/script.js"></script>
</body>

</html>