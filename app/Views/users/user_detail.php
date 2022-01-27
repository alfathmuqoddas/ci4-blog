<div class="py-5" style="min-height: 71vh;">
  <div class="container">
    <div class="row">
      <div class="col col-12 col-md-4">
        <div class="bg-white rounded mb-3 p-4">
          <h3> <?= esc($user->name) ?> </h3>
          <p>@<?= esc($user->username) ?> </p>
          <img src="/uploads/<?= ($user->avatar) ?>">
        </div>
      </div>
      <div class="col col-12 col-md-8">
        <div class="py-3 mb-2 px-3 bg-white">
          <h4 class="m-0">Your Shouts!</h4>
        </div> <?php foreach($posts as $row):?> <div class="p-3 mb-2 rounded bg-white">
          <div class="d-flex align-items-center justify-content-between" style="font-size: 0.8rem">
            <div class="d-flex align-items-center">
              <div class="fs-6 fw-bold"> <?= esc($user->name) ?> </div>
              <div class="mx-3">@ <?= esc($user->username) ?> </div>
            </div>
            <div> <?= date('j/m/y G:i:s', strtotime($row->created_at));?> </div>
          </div>
          <td> <?= $row->body;?> </td>
          <br /> 
          <?php if(session()->get('isLoggedIn')) : ?>
          <a href="" class="text-danger">Delete</a>
      	  <?php endif; ?>
        </div> <?php endforeach;?>
      </div>
    </div>
  </div>
</div>