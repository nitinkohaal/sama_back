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
            $sql = "SELECT * FROM gears ORDER BY created_at asc";
            $stmt = $pdo->query($sql);
            $gear_product = $stmt->fetchAll();

            // echo '<pre>';
            // print_r($accessories);
            // echo '</pre>';

            foreach ($gear_product as $gears) : 
              $stmt2 = $pdo->prepare("SELECT image_path FROM gears_images WHERE gear_id = ?");
              $stmt2->execute([$gears['id']]);
              $images = $stmt2->fetchAll();

              
            ?>
              <tr>
                <td><?php echo $gears['id']; ?></td>
                <td><?php echo htmlspecialchars($gears['name']); ?></td>
                <td><?php echo htmlspecialchars($gears['price']); ?></td>
                <td><?php echo htmlspecialchars($gears['stock']); ?></td>

                <td class="image-td">
                  <?php foreach ($images as $img): ?>
                    <img src="<?php echo htmlspecialchars($img['image_path']); ?>" style="width:50px; margin-right:5px;" />
                  <?php endforeach; ?>
                </td>

                <td class="actions">
                  <a href="edit_accessory.php?id=<?php echo $gears['id']; ?>">Edit</a>
                  <a class="logout-button" style="color: white;" href="delete_gear.php?id=<?php echo $gears['id']; ?>" onclick="return confirm('Are you sure you want to delete this accessory?')">Delete</a>
                </td>

              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>