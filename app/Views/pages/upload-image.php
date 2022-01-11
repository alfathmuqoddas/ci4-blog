<div class="container">
  <?php if (session('msg')) : ?>
      <div class="alert alert-info alert-dismissible">
          <?= session('msg') ?>
          <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
      </div>
  <?php endif ?>

  <div class="row">
    <div class="col-md-9">
      <form class="my-5" action="<?php echo base_url('form/storeMultipleFile');?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input class="form-control mb-3" name="title" type="text" placeholder="Insert product title" >
        <input class="form-control mb-3" name="product_name" type="text" placeholder="Insert product Description" >
        <input type="file" name="file[]" class="form-control mb-3" id="file" multiple>
        <input type="submit" id="send_form" class="btn btn-success" value="Submit">
        
      </form>
    </div>

      <?php foreach($posts as $row) :?>
          <div>
          <a href='form/<?= esc($row->id, 'url') ?>'><h5><?= $row->title; ?></h5></a>
          <p><?= esc($row->name) ?></p>
        </div>
      <?php endforeach; ?>
  </div>
</div>