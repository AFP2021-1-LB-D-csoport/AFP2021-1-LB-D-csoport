<div class="d-flex align-items-center justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
    <?php
if ($result === null || empty($result)): ?>
    <h2 class="text-center">Nincs találat</h2>
    <div class="d-flex align-items-center justify-content-left">
        <img src="./public/img/no_image.jpeg" width="25%" class="p-2">
        <div class="row">
            <div>Helység</div>
            <div>Ár</div>
            <div>Négyzetméter</div>
        </div>
    </div>
<?php else: ?>
    <?php $count = count($result); ?>
        <?php for ($i = 0; $i < $count; $i++): ?>
            <div class="d-flex align-items-center justify-content-left">
                <img src="./public/img/no_image.jpeg" width="25%" class="p-2">
                <div class="row">
                    <div><?php $result[$i]['PROLOC.city'] ?></div>
                    <div><?php $result[$i]['PRODES.property_price'] ?> Ft</div>
                    <div><?php $result[$i]['PRODES.property_size'] ?> m²</div>
                </div>
            </div>
        <?php endfor; ?>
<?php endif; ?>
    </div>
</div>