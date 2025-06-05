 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
       <th>bike Model</th>
       <th>Price (₹)</th>
       <th>Stock</th>
       <th>Image</th>
       <th>Actions</th>
     </tr>
   </thead>
   <tbody id="product-table-body">

     <?php
      $sql = "SELECT * FROM accessories ORDER BY created_at asc";
      $stmt = $pdo->query($sql);
      $accessories = $stmt->fetchAll();

      // echo '<pre>';
      // print_r($accessories);
      // echo '</pre>';

      foreach ($accessories as $accessory) {
        $stmt2 = $pdo->prepare("SELECT image_path FROM accessory_images WHERE accessory_id = ?");
        $stmt2->execute([$accessory['id']]);
        $images = $stmt2->fetchAll();


        $stmt3 = $pdo->prepare("SELECT model_name FROM bike_models WHERE id = ?");
        $stmt3->execute([$accessory['bike_model_id']]);
        $bike_model_name = $stmt3->fetch();
        $accessory['bike_model_name'] = $bike_model_name['model_name'];






      ?>
       <tr>
         <td><?php echo $accessory['id']; ?></td>
         <td><?php echo htmlspecialchars($accessory['name']); ?></td>
         <td><?php echo htmlspecialchars($accessory['bike_model_name']); ?></td>
         <td><?php echo htmlspecialchars($accessory['price']); ?></td>
         <td><?php echo htmlspecialchars($accessory['stock']); ?></td>

         <td class="image-td">
           <?php foreach ($images as $img): ?>
             <img src="<?php echo htmlspecialchars($img['image_path']); ?>" style="width:50px; margin-right:5px;" />
           <?php endforeach; ?>
         </td>

         <td class="actions">
           <button  onclick="xyz(this);"   class="text-body btn  btn-primary btn-sm edit-accessory-button"
             data-accessory-id="<?= $accessory['id'] ?>"
             data-accessory-name="<?= htmlspecialchars($accessory['name']) ?>"
             data-accessory-model-id="<?= $accessory['bike_model_id'] ?>"
             data-accessory-image="<?= $images[0]['image_path'] ?? '' ?>"
             data-bs-toggle="modal"
             data-bs-target="#edit_accessory_modal">Edit</button>

           <a class="logout-button" style="color: white;" href="delete_accesy.php?id=<?php echo $accessory['id']; ?>" onclick="return confirm('Are you sure you want to delete this accessory?')">Delete</a>

         </td>

       </tr>
     <?php } ?>
   </tbody>

 </table>

       <div class="modal fade" id="edit_accessory_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <form id="edit_accessory_form" action="./edit_accessory.php" enctype="multipart/form-data" method="post">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">edit accessories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">


                <input type="hidden" name="accessory_id" id="accessory_id">
                
                <div class="mb-3">

                <label for="accessory_name">Accessories name</label>
                <input type="text" name="accessory_name" id="accessory_name">

                <label for="accessory_bike_model">Bike model</label>
                 <select name="accessory_bike_model" id="accessory_bike_model">
                   <?php

                   $stmt = $pdo->query("SELECT id, model_name FROM bike_models ORDER BY model_name desc");
                   while ($row = $stmt->fetch()) {
                     echo "<option value='{$row['id']}'>{$row['model_name']}</option>";
                   }
                   ?>
                 </select>
                </div>

                <div class="mb-3">
                  <label>Current Image</label><br>
                  <img id="accessory_image" src="" width="200" class="mb-2"><br>
                  
                  <label  for="edit_accessory_image">Change Image (optional)</label>
                  <input type="file" class="form-control" name="image" id="edit_accessory_image">
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
