<div class="py-5" style="min-height: 71vh;">
	<div class="container">
	Home
	</div>
	<div class="container">
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