<section id="main_section">
    <div id="containEpaper">
        <?php for ($i = 1; $i <= $type; $i++) { ?>
            <div id="paper-design" class="paper-design-html paper-design-<?= $i ?>">
                <div id="paper-new" class="paper-design-inner paper-new-<?= $i ?>" style="max-width: 800px;margin: auto; background-color: white;">
                    <div id="header-footer-paper" style="display: block;">
                        <div id="header-paper-<?= $i ?>" style="width: 100%; padding: 0px;">
                        </div>
                        <div id="second-header-paper-<?= $i ?>" style="width: 100%; padding: 0px;">
                        </div>
                        <div id="sub-header-paper-<?= $i ?>" style="width: 100%; padding: 0px;">
                        </div>
                    </div>
                    <div id="layout-paper" style="width: 100%; padding: 0px; overflow: hidden; height: 900px;">
                        <div id="layout-paper-<?= $i ?>">

                        </div>
                    </div>
                    <div id="header-footer-paper-<?= $i ?>" style="position: sticky;top: 960px;">
                        <div id="headerfooter-paper2" style="width: 100%;">
                            <div style="width: 100%; background-color: rgb(241, 214, 137)">
                                <div style="width: 13%; padding-left: 2px;">
                                    <img src="../uploads/images/assets/img-circle.png" style="width: 50%;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<link rel="stylesheet" href="<?= base_url('assets/admin/css/epaperstyle.css'); ?>">

<input type="hidden" id="userId" value="<?= $userId ?>">
<section id="page-feature">
    <div class="container py-3">
        <div class="row">

            <button class="btn btn-primary" id="saveEpaper">Save</button>

        </div>
    </div>
</section>

<section id="page-feature">
    <div class="container py-3">
        <div class="row">
            <div class="col-6 page-number">
                <?php for ($i = 1; $i <= $type; $i++) { ?>
                    <button class="btn btn-light page_number" data-id="<?= $i ?>"><strong><?= $i ?></strong></button>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section id="content-functions">
    <div class="container ">
        <div class="row ">
            <div class="justify-content-center">
                <div class="d-flex  scrollable-row" id="scrollableRow">
                    <button type="button" class="btn btn-danger mx-1" id="content-functions1">Remove Element</button>
                    <?php
                    foreach ($template as $t) { ?>
                        <button type="button" class="btn btn-primary mx-1 templateButton" id="content-functions" data-child="0" data-id="<?= $t->id ?>" data-subcategory="<?= $t->is_subcategory ?> "><?= $t->name ?> </button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sub-content-functions">
    <div class="container ">
        <div class="row ">
            <div class="col-sm-12 d-flex justify-content-center">
                <div class="d-flex  scrollable-row" id="subHeaderButtons">

                </div>
            </div>
        </div>
    </div>
</section>

<div class="card h-100" id="preview_div" style="display:none;">
    <div class="card-body" id="Subheader">
        <div class="row" id="myBodyContainer">
        </div>
    </div>
</div>



<style>
    #paper-design {
        display: none;
    }
</style>
<input type="hidden" id="currentpage" value="1">




<script>
    $(document).ready(function() {
        $("body").delegate(".file-input", "change", function() {
            var $imageContainer = $(this).closest('.photo-div');
            var $myImage = $imageContainer.find('.my-image');
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $myImage.attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
            $(this).css('display', 'none');
        });
        let pageType = "<?= $type ?>";
        $(".paper-design-1").show();
        $("body").delegate(".templateButton", "click", function() {
            let id = $(this).data('id');
            let child = $(this).data('child');
            if (child == 0) {
                $("#subHeaderButtons").html('');
            }

            $("#myBodyContainer").html('');
            let subcategory = $(this).data('subcategory');
            if (subcategory == 1) {
                var data = {
                    'id': id
                };
                $.ajax({
                    url: VrConfig.baseURL + "/admin/epaper-sub-cat",
                    type: 'POST',
                    data: setAjaxData(data),
                    success: function(data) {
                        data = JSON.parse(data);
                        console.log(data, data.length);
                        let html = "";
                        for (var i = 0; i < data.length; i++) {
                            html += `<button type="button" class="btn btn-light mx-1 templateButton" id="content-functions" data-child="1" data-id="${data[i].id}">${data[i].name}</button>`;
                        }

                        $("#subHeaderButtons").html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                $("#preview_div").show();
                var data = {
                    'id': id
                };
                $.ajax({
                    url: VrConfig.baseURL + "/admin/epaper-design",
                    type: 'POST',
                    data: setAjaxData(data),
                    success: function(data) {
                        data = JSON.parse(data);
                        console.log(data, data.length);
                        let html = "";
                        let btnclass = "";
                        if (id == 8) {
                            btnclass = "removeFooter";
                        } else if (id == 7) {
                            btnclass = "removeSubHeader";
                        } else if (id == 6) {
                            btnclass = "removeSecondHeader";
                        }
                        html += `<button type="button" class="btn btn-danger ${btnclass}" id="content-functions1" style="margin-left: 45%;margin-top: 10px;">Remove</button>`;
                        for (var i = 0; i < data.length; i++) {
                            html += `<div class="col-12 btnhtml" data-id="${data[i].id}">${data[i].preview}</div>`;
                        }
                        $("#myBodyContainer").html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
        });
    });

    $("body").delegate(".btnhtml", "click", function() {
        var id = $(this).data('id');
        var data = {
            'id': id
        };
        $.ajax({
            url: VrConfig.baseURL + "/admin/epaper-single-design",
            type: 'POST',
            data: setAjaxData(data),
            success: function(data) {
                data = JSON.parse(data);
                let currentpage = $("#currentpage").val();
                if (data.type_id == 8) {
                    $(`#header-footer-paper-${currentpage}`).html(data.description);
                } else if (data.type_id == 7) {
                    $(`#sub-header-paper-${currentpage}`).html(data.description);
                } else if (data.type_id == 6) {
                    $(`#second-header-paper-${currentpage}`).html(data.description);
                } else if (data.type_id == 4) {
                    $(`#header-paper-${currentpage}`).html(data.description);
                } else {
                    $(`#layout-paper-${currentpage}`).append(data.description);
                }


            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });

        console.log(id)

    });

    $("body").delegate(".page_number", "click", function() {
        var id = $(this).data('id');
        $(".paper-design-html").hide();
        $(`.paper-design-${id}`).show();
        $("#currentpage").val(id);

    });

    $("body").delegate(".removeSubHeader", "click", function() {
        let currentpage = $("#currentpage").val();
        $(`#sub-header-paper-${currentpage}`).html('');
    });

    $("body").delegate(".removeFooter", "click", function() {
        let currentpage = $("#currentpage").val();
        $(`#header-footer-paper-${currentpage}`).html('');
    });

    $("body").delegate(".removeSecondHeader", "click", function() {
        let currentpage = $("#currentpage").val();
        $(`#second-header-paper-${currentpage}`).html('');
    });

    $("body").delegate("#saveEpaper", "click", function() {
        var userId = $("#userId").val();

        $("#containEpaper textarea").each(function() {
            $(this).text($(this).val());
        });
        var type = '<?= $type ?>';
        var htmlval = {};
        for (var i = 1; i <= type; i++) {
            console.log(i, "this is i value")
            let value = $(`.paper-design-${i}`).html();
            console.log(value);
            $(`#paper-design-${i}`).removeAttr('style');
            htmlval[i] = value;

        }

        console.log(htmlval);



        // var textareaContainer = document.getElementById("paper-design-1");
        // var textareas = textareaContainer.getElementsByTagName("textarea");
        // console.log(textareas);

        // var textareaValues = [];
        // for (var i = 0; i < textareas.length; i++) {
        //     textareaValues.push(textareas[i].value);
        // }

        // console.log(description,textareaValues);

        // var description = $("#containEpaper").html();
        var csrfToken = '<?= csrf_hash() ?>';

        var data = {
            'userId': userId,
            'description': JSON.stringify(htmlval),
            'type': type
        };
        $.ajax({
            url: VrConfig.baseURL + "/admin/epaper-save",
            type: 'POST',
            data: setAjaxData(data),
            headers: {
                'X-CSRF-TOKEN': csrfToken // Send CSRF token in the headers
            },
            success: function(data) {
                console.log(data);
                window.location.href = VrConfig.baseURL + "/admin/epaper";

            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });



    });
    const textareas = document.querySelectorAll('.dynamicTextarea');
    const innerDivs = document.querySelectorAll('.inner-div');

    textareas.forEach((textarea, index) => {
        textarea.addEventListener('input', () => {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';

            innerDivs[index].style.width = (innerDivs[index].offsetWidth + 2) + 'px';
        });
    });
</script>