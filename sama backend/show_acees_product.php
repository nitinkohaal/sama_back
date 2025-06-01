 <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
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

              
            ?>
              <tr>
                <td><?php echo $accessory['id']; ?></td>
                <td><?php echo htmlspecialchars($accessory['name']); ?></td>
                <td><?php echo htmlspecialchars($accessory['price']); ?></td>
                <td><?php echo htmlspecialchars($accessory['stock']); ?></td>

                <td class="image-td">
                  <?php foreach ($images as $img): ?>
                    <img src="<?php echo htmlspecialchars($img['image_path']); ?>" style="width:50px; margin-right:5px;" />
                  <?php endforeach; ?>
                </td>

                <td class="actions">
                  <a href="edit_accessory.php?id=<?php echo $accessory['id']; ?>">Edit</a>
                  <a class="logout-button" style="color: white;" href="delete_accesy.php?id=<?php echo $accessory['id']; ?>" onclick="return confirm('Are you sure you want to delete this accessory?')">Delete</a>
                </td>

              </tr>
            <?php } ?>
          </tbody>

        </table>