<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
<div class="col-md-12 page-body">
<div class="row">
  <div class="sub-title">
      <h2>Post</h2>
        <a href="contact.html"><i class="icon-envelope"></i></a>
        <p><a href="index.php?type=backend&mod=post&act=create">Add new post</a></p>
        <?php if (isset($_COOKIE['add_new'])) { ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_COOKIE['add_new'] ?>
          </div>
      <?php } ?>
      <?php if (isset($_COOKIE['update'])) { ?>
          <div class="alert alert-info" role="alert">
            <?php echo $_COOKIE['update'] ?>
          </div>
      <?php } ?>
      <?php if (isset($_COOKIE['delete'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_COOKIE['delete'] ?>
          </div>
      <?php } ?>
     </div>
    
    
    <div class="col-md-12 content-page">
      
        
        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post">
             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($posts as $key => $value) { ?>
                      <tr>
                          <td style="width: 20px;"><?php echo $value['id']; ?></td?>
                          <td><a target="_blank" href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id']?>"><?php echo $value['title']; ?></a></td?>
                          <td style="width: 165px;">
                              <a href="index.php?type=backend&mod=post&act=detail&id=<?php echo $value['id']?>&category_id=<?php echo $value['category_id']?>&user_id=<?php echo $value['user_id']?>" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                              <a href="index.php?type=backend&mod=post&act=edit&id=<?php echo $value['id']?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="index.php?type=backend&mod=post&act=delte&id=<?php echo $value['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></</a>
                          </td>
                      </tr>
                  <?php } ?>
                </tbody>
        </table>
    
        </div>
        <!-- Blog Post End -->    
     </div>
      
 </div>
<?php require_once('views/backend/includes/footer.php') ?>                        