<h2>Chi tiết sản phẩm</h2>
<table class="table">
  <thead>
  <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Supplier</th>
      <th></th>
      <th></th>
  </tr>
  </thead>
  <tbody>
  <tr>
      <td><?php echo $product->id ?></td>
      <td><?php echo $product->name ?></td>
      <td><?php echo $product->price ?></td>
      <td><?php echo $product->description ?></td>
      <td><?php echo $product->supplier ?></td>
      <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
      <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
  </tbody>
</table>