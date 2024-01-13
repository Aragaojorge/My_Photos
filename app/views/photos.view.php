<?php $this->view('includes/header', $data); ?>

    <div class="p-4"><h3>Photos</h3></div>

    <div class="row p-4 justify-content-center">

        <?php if(!empty($rows)):?>
            <?php foreach($rows as $row):?>
                <div class="col-sm-4 col-md-3 col-lg-2 m-2 text-center bg-light">
                    <a href="<?ROOT?>/photo/<?=$row->id?>">
                        <img src="<?=get_image($image->getThumbnail($row->image, 250, 251))?>" class="img-thumbnail" style="object-fit:cover; width:250px; height:250px">
                        <div class="card-header"><?=esc($row->title)?></div>                       
                    </a>
                </div>
            <?php endforeach?>
        <?php else:?>
            <div class="p-2 text-center">
                No images found!
            </div>
        <?php endif?>
    </div>

<?php $this->view('includes/footer', $data); ?>