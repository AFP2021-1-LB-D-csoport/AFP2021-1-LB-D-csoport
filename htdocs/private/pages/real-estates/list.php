<div class="d-flex align-items-center justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
    <?php
if ($result === null || empty($result)): ?>
    <h2 class="text-center">Nincs találat</h2>
<?php else: ?>
    <?php $count = count($result); ?>
        <?php for ($i = 0; $i < $count; $i++): ?>
            <div class="d-flex align-items-center justify-content-left">
                <img src="./public/img/no_image.jpeg" width="25%" class="p-2">
                <div class="row">
                    <div><?php echo $result[$i]['city'] ?></div>
                    <div><?php echo $result[$i]['property_price'] ?> Ft</div>
                    <div><?php echo $result[$i]['property_size'] ?> m²</div>
                </div>
            </div>
        <?php endfor; ?>
<?php endif; ?>
    </div>
</div>