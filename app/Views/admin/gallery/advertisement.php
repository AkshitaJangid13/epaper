<div class="row">
    <div class="col-sm-12">
        <?= view('admin/includes/_messages'); ?>
    </div>
</div>
<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title">Advertisement</h3>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr role="row">
                                <th width="20"><?= trans('id'); ?></th>
                                <th><?= trans('image'); ?></th>
                                <th>Page NO</th>
                                <th><?= trans('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($advertisement)) :
                                foreach ($advertisement as $item) :
                                    $imgBaseURL = getBaseURLByStorage($item->storage); 
                            ?>
                                    <tr>
                                        <td><?= esc($item->id); ?></td>
                                        <td> <div style="position: relative; height: 105px; overflow: hidden">
                                            <img src="<?= $imgBaseURL . esc($item->image); ?>" alt="" class="img-responsive" style="max-width: 140px; max-height: 105px;">
                                            
                                        </div></td>
                                        <td><?= $item->page_no; ?></td>
                                        <td>
                                            <li>
                                                <a href="javascript:void(0)" data-id="<?= $item->id ?>" data-image="<?= $imgBaseURL ?>" class="updateImage"><i class="fa fa-edit option-icon"></i><?= trans('edit'); ?></a>
                                            </li>
                                        </td>
                                    </tr>
                            <?php endforeach;
                            endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal for updating image -->
<div class="modal fade" id="updateImageModal" tabindex="-1" role="dialog" aria-labelledby="updateImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form id="updateImageForm" action="<?= adminUrl('update-advertisement') ?>" enctype="multipart/form-data" method="post">
        <?= csrf_field(); ?>
            <div class="modal-header">
                <h5 class="modal-title" id="updateImageModalLabel">Update Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add a form for updating the image -->
               
                    <div class="form-group">
                        <label for="imageInput">Choose a new image:</label>
                        <input type="file" class="form-control-file" id="imageInput" accept="image/*" name="files">
                        <input type="hidden" id="imageid" value="" name="id">
                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveImageButton">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".updateImage").click(function() {
            var id = $(this).data('id');
            var image = $(this).data('image');
            $("#imageid").val(id);
            $("#updateImageModal").modal('show');
            console.log(image, id);
        });
    });
</script>