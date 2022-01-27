  <div class="container">
    <div class="row">
      <div class="col col-12 col-md-4">
        <div class="bg-white rounded mb-3 p-4">
          <h3> <?= esc($user->name) ?> </h3>
          <p>@<?= esc($user->username) ?> </p>
          <img class="" src="<?= base_url() ;?>/uploads/<?= ($user->avatar) ?>" alt="avatar" style="max-width: 128px; height: auto;">
        </div>
      </div>
      <div class="col col-12 col-md-8">
        <div class="py-3 mb-2 px-3 bg-white">
	        <?php if(session()->get('isLoggedIn')) : ?>
	          <h4 class="m-0">Your Shouts!</h4>
	      	<?php else : ?>
	      	  <h4 class="m-0"><?= esc($user->username) ?>'s Shouts!</h4>
	        <?php endif; ?>
        </div>

        <?php foreach($posts as $row):?>
	        <div class="p-3 mb-2 rounded bg-white">
	          <div class="d-flex align-items-center justify-content-between" style="font-size: 0.8rem">
	            <div class="d-flex">
	              <div class="fw-bold"> <?= esc($user->name) ?> </div>
	              <div class="mx-3">@ <?= esc($user->username) ?> </div>
	              <div class=""> <?= date('j/m/y G:i:s', strtotime($row->created_at));?> </div>
	         	</div>
	          </div>

	          <div class="py-2"><?= $row->body;?></div>
	          <?php if(session()->get('isLoggedIn')) : ?>
	          	<a href="<?php echo base_url(); ?>/posts/delete/<?= $row->id; ?>" class="text-danger" onclick="return confirm('Are you sure?')">Delete</a>
	      	  <?php endif; ?>
	        </div>
    	<?php endforeach;?>

      </div>
    </div>
  </div>