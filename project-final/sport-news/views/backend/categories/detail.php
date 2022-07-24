
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
<div class="col-md-12 page-body">
<div class="row">
  <div class="sub-title">
      <h2>Detail Category</h2>
      <a href="contact.html"><i class="icon-envelope"></i></a>
      <p><a href="index.php?type=backend&mod=category&act=index">BACK</a></p>
     </div>
    
    <div class="col-md-12 content-page">
      
        
        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post">
             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">P-ID</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Create At</th>
                  </tr>
                </thead>
                <tbody>
                      <tr>
                          <td><?php echo $categories['name']; ?></td?>
                          <td style="width: 50px"><?php echo $categories['parent_id']; ?></td?>
                          <td class="cate"><?php echo "<img src='images/category/".$categories['thumbnail']."' >"; ?></td?>
                          <td><?php echo $categories['slug']; ?></td?>
                          <td><?php echo $categories['description']; ?></td>
                          <td><?php echo $categories['created_at']; ?></td>
                      </tr>
                </tbody>
        </table>
    
        </div>
        <!-- Blog Post End -->
        
     </div>
      
 </div>
<?php require_once('views/backend/includes/footer.php') ?>                        