<div class="py-5" style="min-height: 71vh;">
	<div class="container">
	Home
	</div>
	<div class="container">
        <?php if(session()->get('isLoggedIn')) : ?>
            <?php echo form_open('posts/create') ?>
                 <input type="text" name="body" placeholder="What's on your mind?" value="<?= set_value('body') ?>" class="form-control">
                 <input type="submit" class="btn btn-primary" value="submit">
            </form>
        <?php endif; ?>

        <?php if(!session()->get('isLoggedIn')) : ?>
            <h2>Login to create shouts</h2>
        <?php endif; ?>

        <?php foreach($posts as $row):?>
            <div>
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