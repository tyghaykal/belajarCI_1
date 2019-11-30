<body>
 
    <div class="container">
      <h1><center>Edit Product</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="{baseurl}{ctl}/updated/{id}" method="post">
            {product}
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Product Name" value="{product_name}">
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="product_price" placeholder="Price" value="{product_price}">
          </div>
          <center><button type="submit" class="btn btn-primary">Submit</button></center>
            {/product}
        </form>
      </div>
    </div>
</body>

