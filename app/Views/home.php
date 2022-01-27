	<div class="container">
        <div class="row">
            <?php if(session()->get('isLoggedIn')) : ?>
                <div class="col col-12 col-md-4">
                    <div class="bg-white rounded mb-3">
                    <?php echo form_open('posts/create') ?>
                         <textarea name="body" placeholder="What's on your mind, <?= session()->get('username') ?>?" value="<?= set_value('body') ?>" maxlength="140" class="p-3 w-100" required style="border: none"></textarea>
                         <input type="submit" class="btn btn-primary m-3 mt-0" value="Shouts!">
                    <?php form_close() ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!session()->get('isLoggedIn')) : ?>
            <div class="col col-12 col-md-4">
                <div class="mb-5">
                    <h2>Login to post Shouts!</h2>
                </div>
            </div>
            <?php endif; ?>

            <div class="col col-12 col-md-8">
                <div class="rounded py-3 mb-2 px-3 bg-white">
                    <h4 class="m-0">Shouts!</h4>
                </div>
                <?php foreach($posts as $row):?>
                            <div class="row g-0 p-3 bg-white rounded mb-2">
                                <div class="col-1">
                                <img src="<?=base_url();?>/uploads/<?= $row->avatar ?>" alt="avatar" class="img-fluid rounded" style="">
                                </div>
                                <div class="col-11 px-3">
                                    <div class="d-flex align-items-center justify-content-start" style="font-size: 0.8rem">
                                    	<a href="/users/details/<?= $row->id ?>" class="text-decoration-none hover"><div class="hover fw-bold text-dark"><?= $row->name; ?></div></a>
                                        <div class="mx-3">@<?= $row->username; ?></div>
                                        <div><?= date('j/m/y G:i:s', strtotime($row->created_at));?></div>
                                    </div>
                                    <div class="pt-2"><?= $row->body;?></div>
                                </div>
                            </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>