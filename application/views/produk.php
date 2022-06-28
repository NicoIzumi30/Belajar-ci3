<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Produk 
        <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard" ></i> Home   </a></li>
            <li class="active"> / Data Produk</li>
        </ol>
    </section>
    <section class="content">
        <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Product</button>
        <table>
        <table class="table">
        <tr>
            <th>No</th>  
            <th>Name</th>
            <th>Date Create</th>
            <th>Description</th>
            <th>active</th>
            <th>Image</th>
        </tr>
        <?php
        $no = 1;
         foreach ($product as $pdc ) :  
         ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$pdc['name']?></td>
                <td><?=$pdc['date_create']?></td>
                <td><?=$pdc['description']?></td>
                <?php if ($pdc['active'] > 0) { ?>
                    <td><button type="button" class="btn btn-sm btn-success">Active</button></td>
                <?php }else{ ?>
                    <td><button type="button" class="btn btn-sm btn-danger">No Active</button></td>
                    <?php } ?>
                    <td><img style="width: 100px;" src="http://localhost:8080/Belajar-ci3/image/<?=$pdc['image']; ?>"></td>
                    <?php   
                    foreach ($get_category as $cat ) :
                    var_dump($cat['active']);
                 
                    ?>
                    <?php endforeach; ?>

            </tr>
            <?php endforeach;?>
     </table>
        </table>
    </section>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="http://localhost:8080/Belajar-ci3/index.php/admin/add_product" method="post" enctype="multipart/form-data">
            <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Product</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Product" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Category Product</label>
                                <select name="category" class="form-control" required>
                                    <option value="Kipas Angin">Kipas Angin</option>
                                    <option value="Mobil">Mobil</option>
                                 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <select name="suppliers" class="form-control" required>
                                    <option value="nico izumi">Nico Izumi</option>
                                </select>
                            </div>
                            <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Product</button>
      </div>
        </form>
      </div>

    </div>
  </div>
</div>