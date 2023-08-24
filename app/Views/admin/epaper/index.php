<div class="row">
    <div class="col-sm-12 form-header">
        <h1 class="form-title form-title-post-format">Epaper</h1>
    </div>
</div>
<style>
    #paper_card .container {
        max-width: 700px;
    }

    .card-img-top {
        height: 100px;
        width: 100px;
    }

    #viewDiv {
        border: 2px dotted #999;
        padding-left: 20px;
        margin-bottom: 13px;
    }

    .m-b-15 .alert {
        width: 100%;
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <?= view('admin/includes/_messages'); ?>
    </div>
</div>
<section id="next" style="text-align:right;padding-right:20px;">
    <div class="row">
        <div class="col m-3 d-flex justify-content-end">
            <a href="<?= adminUrl('epaper-format'); ?>">
                <button class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i>
                    New paper
                </button>
            </a>
        </div>
    </div>
</section>
<div class="row" id="paper_card">

    <div class="container py-5">

        <div class="row">
            <div class="col-12 my-2">
                <?php
                foreach ($epaperData as $item) {
                ?>

                    <div class="row" id="viewDiv">
                        <div class="col-md-2">
                            <img src="../uploads/newspaper.png" alt="" class="card-img-top">
                        </div>
                        <div class="col-md-8">
                            <a href="<?= adminUrl('epaper-view/' . $item->id); ?>">
                                <h3 class="text-start"><label><strong>Epaper <?= $item->number ?></strong></label></h3>
                            </a>
                            <p class="text-start">Created on <?= date("Y-m-d", strtotime($item->createdAt)) ?> <span><?= $item->type ?> pages</span></p>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <a href="<?= adminUrl('epaper-delete/' . $item->id); ?>" onclick="return confirm('Are you sure you want to delet this?')">
                                <h2><i class="fa fa-trash" aria-hidden="true" style="font-size: 50px;color: red;"></i></h2>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if (empty($epaperData)) : ?>
                <div class="col-12 my-2">
                    <p class="text-center text-muted" style="border:1px solid;border-radius:5px;padding:10px;font-size:14px;font-weight:600"><?= trans("no_records_found"); ?></p>
                </div>
            <?php endif; ?>
        </div>

    </div>

</div>