<div class="py-5" style="min-height: 71vh;">
	<div class="container">
        <div class="row">
            <?php if(session()->get('isLoggedIn')) : ?>
                <div class="col col-12 col-md-4">
                    <div class="bg-white rounded mb-3">
                    <?php echo form_open('posts/create') ?>
                         <textarea name="body" placeholder="What's on your mind, <?= session()->get('username') ?>?" value="<?= set_value('body') ?>" maxlength="140" class="p-4 w-100" required style="border: none"></textarea>
                         <input type="submit" class="btn btn-primary m-3 mt-0" value="Shouts!">
                    <?php form_close() ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!session()->get('isLoggedIn')) : ?>
            <div class="col col-12 col-md-4">
                <div class="mb-5">
                    <h2>Login to create shouts</h2>
                </div>
            </div>
            <?php endif; ?>

            <div class="col col-12 col-md-8">
                <div class="pt-3 px-3 bg-white">
                    <h4 class="m-0">Shouts!</h4>
                </div>
                <?php foreach($posts as $row):?>
                    <div class="d-flex">
                        <img src="<?=base_url();?>/public/uploads/avatar/<?= $row->avatar ?>" alt="avatar" class="img-fluid">
                        <div class="p-3 mb-2 rounded bg-white">
                        	<div class="d-flex align-items-center justify-content-between" style="font-size: 0.8rem">
                                <div class="d-flex align-items-center">
                                	<div class="fs-6 fw-bold"><?= $row->name; ?></div>
                                    <div class="mx-3">@<?= $row->username; ?></div>
                                </div>
                                <div><?= date('j/m/y G:i:s', strtotime($row->created_at));?></div>
                            </div>
                            <td><?= $row->body;?></td>
                            <br/>
                            <a href="">Like</a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>