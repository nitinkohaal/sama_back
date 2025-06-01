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
            $sql = "SELECT * FROM apparel ORDER BY created_at asc";
            $stmt = $pdo->query($sql);
            $apparel_item = $stmt->fetchAll();        

            foreach ($apparel_item as $apparel) {
              $stmt2 = $pdo->prepare("SELECT image_path FROM apparel_images WHERE apparel_id = ?");
              $stmt2->execute([$apparel['id']]);
              $images = $stmt2->fetchAll();
              
            ?>
              <tr>
                <td><?php echo $apparel['id']; ?></td>
                <td><?php echo htmlspecialchars($apparel['name']); ?></td>
                <td><?php echo htmlspecialchars($apparel['price']); ?></td>
                <td><?php echo htmlspecialchars($apparel['stock']); ?></td>

                <td class="image-td">
                  <?php foreach ($images as $img): ?>
                    <img src="<?php echo htmlspecialchars($img['image_path']); ?>" style="width:50px; margin-right:5px;" />
                  <?php endforeach; ?>
                </td>

                <td class="actions">
                  <a href="edit_accessory.php?id=<?php echo $apparel['id']; ?>">Edit</a>
                  <a class="logout-button" style="color: white;" href="delete_accesy.php?id=<?php echo $apparel['id']; ?>" onclick="return confirm('Are you sure you want to delete this accessory?')">Delete</a>
                </td>

              </tr>
            <?php } ?>
          </tbody>

        </table>