<body> 
    <div class="container">
        <h1><center>Product List</center></h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        {product}
          <tr>
            <th>{product_id}</th>
            <td>{product_name}</td>
            <td>{product_price}</td>
            <td>
              <a href="update/{product_id}" class="btn btn-sm btn-info">Update</a>
              <a href="delete/{product_id}" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        {/product}        
        </tbody>
      </table> 
      <div>
        <center><button onclick="location.href='create'" >Insert New Product</button></center>
      </div>
    </div>
</body>