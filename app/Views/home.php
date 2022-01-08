<div class="py-5" style="min-height: 71vh;">
	<div class="container">
        <?php if(session()->get('isLoggedIn')) : ?>
            <div class="bg-light p-4 rounded mb-5">
            <?php echo form_open('posts/create') ?>
                 <input type="text" name="body" placeholder="What's on your mind?" value="<?= set_value('body') ?>" maxlength="140" class="form-control mb-3" required>
                 <input type="submit" class="btn btn-primary" value="Shouts!">
            </form>
        </div>
        <?php endif; ?>

        <?php if(!session()->get('isLoggedIn')) : ?>
        <div class="mb-5">
            <h2>Login to create shouts</h2>
        </div>
        <?php endif; ?>

        <?php foreach($posts as $row):?>
            <div class="my-3">
            	<div class="d-flex align-items-center g-2">
                	<div class="fw-bold"><?= $row->name; ?></bold></div>
                    <div class="mx-3"><?= $row->username;?></div>
                    <div><?= $row->created_at;?></div>
                </div>
                <td><?= $row->body;?></td>
            </div>
        <?php endforeach;?>
</div>
</div>