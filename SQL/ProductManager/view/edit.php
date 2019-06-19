<h2>Cập nhật thông tin sản phẩm</h2>
<form method="post" action="./index.php?page=edit">
  <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
  <div class="form-group">
      <label>Tên sản phẩm</label>
      <input type="text" class="form-control" name="name" value="<?php echo $product->name; ?>" placeholder="Nhập tên sản phẩm" required>
  </div>
  <div class="form-group">
      <label>Giá</label>
      <input type="text" class="form-control" name="price" value="<?php echo $product->price; ?>" placeholder="Nhập giá" required>
  </div>
  <div class="form-group">
      <label>Mô tả</label>
      <input type="text" class="form-control" name="description" value="<?php echo $product->description; ?>"placeholder="Nhập mô tả" required>
  </div>
  <div class="form-group">
      <label>Nhà cung cấp</label>
      <input type="text" class="form-control" name="supplier" value="<?php echo $product->supplier; ?>" placeholder="Nhập nhà cung cấp" required>
  </div>
  <div class="form-group">
      <input type="submit" value="Update" class="btn btn-primary"/>
      <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>
              