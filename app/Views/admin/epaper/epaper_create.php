<section id="main_section">
    <div id="containEpaper">
        <?php for ($i = 1; $i <= $type; $i++) { ?>
            <div id="paper-design" class="paper-design-html paper-design-<?= $i ?>">
                <div id="paper-new" class="paper-design-inner paper-new-<?= $i ?>" style="background-color: white;max-width:1056px;height: 1000px;">
                    <div id="main-<?= $i ?>">
                        <div id="header-footer-paper" style="display: block;">
                            <div id="header-paper-<?= $i ?>" style="width: 100%; padding: 0px;"></div>
                            <div id="second-header-paper-<?= $i ?>" style="width: 100%; padding: 0px;"></div>
                            <div id="sub-header-paper-<?= $i ?>" style="width: 100%; padding: 0px;"></div>
                        </div>
                        <?php
                        // if ($i == 1 || ($i == 4 && $type == 4) ||  $i == 8) { 
                        ?>
                        <!-- <div id="layout-paper-<?= $i ?>" style="width: 100%; padding: 0px; overflow: hidden; height: 650px;">
                            </div>
                            <div id="addvertisement-paper-<?= $i ?>" style="height:350px;position:sticky;">
                                <?php
                                // $imgBaseURL = getBaseURLByStorage($advertisement[$i - 1]->storage);
                                ?>
                                <img src="//$imgBaseURL . esc($advertisement[$i - 1]->image); ?>" alt="" class="img-responsive" style="max-width: 100%;width:100%;height:400px;">
                            </div> -->
                        <?php
                        //  } else {  
                        ?>
                        <div id="layout-paper-<?= $i ?>" style="width: 100%; padding: 0px; overflow: hidden; height: 970px;"></div>
                        <div id="header-footer-paper-<?= $i ?>" style="position: sticky;top: 970px;">
                            <div class="container_div" id="footer1" data-id="footer1">
                                <div style="display: flex; align-items: center;">
                                    <div style="width: 9%; display: flex;">
                                        <img src="https://epapermedia.in/uploads/images/assets/img-circle.png" style="width: 100%;" alt="">
                                    </div>
                                    <div style="width: 82%;border: 2px solid grey;"></div>
                                    <div style="width: 9%; display: flex;">
                                        <img src="https://epapermedia.in/uploads/images/assets/img-circle.png" style="width: 100%;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php // }   
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- bootstrap icons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- google icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
<!-- <form id="fileUploadForm" enctype="multipart/form-data">
    <input type="file" name="fileInput" id="fileInput" class="file-input">
</form> -->
<div id="message"></div>
<img id="imagePreview" src="" alt="Image Preview">
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
        // var $imageContainer = $(this).closest('.photo-div');
        // var $myImage = $imageContainer.find('.my-image');
        // var formData = new FormData($('#fileUploadForm')[0]);

        $("body").delegate(".file-input", "change", function() {
            const file = this.files[0];
            var $imageContainer = $(this).closest('.photo-div');
            var $myImage = $imageContainer.find('.my-image');
            if (file) {
                const formData = new FormData();
                formData.append('files', file);
                var csrfToken = '<?= csrf_hash() ?>';
                $.ajax({
                    url: VrConfig.baseURL + "/admin/save-image",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Send CSRF token in the headers
                    },
                    success: function(data) {
                        console.log(data);
                        $myImage.attr('src', data);

                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            $(this).css('display', 'none');
            // var fileInput = $(this);
            // // var $imageContainer = $(this).closest('.fileUploadForm');
            // // console.log($imageContainer);
            // var formData = fileInput.closest('.fileUploadForm');

            // // var formData = new FormData(fileInput.closest('.fileUploadForm')[0]);
            // console.log(formData);

            // Send CSRF token in the headers
            // var csrfToken = '<?= csrf_hash() ?>';
            // // formData.append('X-CSRF-TOKEN', csrfToken);

            // $.ajax({
            //     url: VrConfig.baseURL + "/admin/save-image",
            //     type: 'POST',
            //     data: formData,
            //     contentType: false,
            //     processData: false,
            //     headers: {
            //         'X-CSRF-TOKEN': csrfToken // Send CSRF token in the headers
            //     },
            //     success: function(data) {
            //         console.log(data);
            //     },
            //     error: function(xhr, status, error) {
            //         console.error('Error:', error);
            //     }
            // });
        });


        // $("body").delegate(".file-input", "change", function() {
        //     var fileInput = $(this);
        //     var formData = new FormData(fileInput.closest('.fileUploadForm')[0]);
        //     var csrfToken = '<?= csrf_hash() ?>';
        //     $.ajax({
        //         url: VrConfig.baseURL + "/admin/save-image",
        //         type: 'POST',
        //         data: formData,
        //         headers: {
        //             'X-CSRF-TOKEN': csrfToken // Send CSRF token in the headers
        //         },
        //         processData: false,
        //         contentType: false,
        //         success: function(data) {
        //             console.log(data);
        //         },
        //         error: function(xhr, status, error) {
        //             console.error('Error:', error);
        //         }
        //     });

        // });
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
                        } else if (id == 5) {
                            btnclass = "removeHeader";
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
                var height = $(`#layout-paper-${currentpage}`).css("height");
                var heightWithoutPx = height.replace("px", "");
                var heightAsNumber = parseInt(heightWithoutPx);
                if (data.type_id == 8) {
                    if (data.id == 32) {
                        let newHeight = heightAsNumber - 35;
                        $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                    } else {
                        var footerhtml = $(`#header-footer-paper-${currentpage} .container_div`).data('id');
                        if (footerhtml == 'footer3') {
                            let newHeight = heightAsNumber + 35;
                            $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                        }
                    }
                    $(`#header-footer-paper-${currentpage}`).html(data.description);
                } else if (data.type_id == 7) {
                    var subheaderhtml = $(`#sub-header-paper-${currentpage}`).html();
                    if (subheaderhtml === '') {
                        if (data.id == 39 || data.id == 40) {
                            let newHeight = heightAsNumber - 40;
                            $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                        } else {
                            let newHeight = heightAsNumber - 30;
                            $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                        }
                    } else {
                        var subheaderhtml = $(`#sub-header-paper-${currentpage} .container_div`).data('id');
                        if ((subheaderhtml == 'sub-header5' || subheaderhtml == 'sub-header4') && data.id == 39 && data.id == 40) {
                            let newHeight = heightAsNumber + 10;
                            $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                        }
                    }
                    $(`#sub-header-paper-${currentpage}`).html(data.description);
                } else if (data.type_id == 6) {
                    var subheaderhtml = $(`#second-header-paper-${currentpage}`).html();
                    if (subheaderhtml === '') {
                        let newHeight = heightAsNumber - 40;
                        $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                    }
                    $(`#second-header-paper-${currentpage}`).html(data.description);
                } else if (data.type_id == 5) {
                    var headerhtml = $(`#header-paper-${currentpage}`).html();
                    console.log(headerhtml.length);
                    if (headerhtml === '') {
                        console.log("dsfdsfdsfsdfs");
                        let newHeight = heightAsNumber - 150;
                        $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
                    }
                    $(`#header-paper-${currentpage}`).html(data.description);
                } else {
                    var description = $(data.description); // Wrap data.description in jQuery

                    var layoutHtml = $(`#layout-paper-${currentpage}`).html();
                    let layoutHeight = heightWithoutPx;

                    if (layoutHtml != '') {
                        // console.log(heightAsNumber,"===================heightAsNumber")
                        // let newHeight = heightAsNumber - 500;
                        // description.find('.dynamicHeight').css('height', `${newHeight}px`);
                        // description.find('td').css('height', `${newHeight}px`);

                        // description.find('textarea').css('height', `${newHeight}px`);
                    }
                    $(`#layout-paper-${currentpage}`).append(description);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });

    $("body").delegate(".page_number", "click", function() {
        var id = $(this).data('id');
        $(".paper-design-html").hide();
        $(`.paper-design-${id}`).show();
        $("#currentpage").val(id);

    });

    $("body").delegate(".removeHeader", "click", function() {
        let currentpage = $("#currentpage").val();
        var headerhtml = $(`#header-paper-${currentpage}`).html();
        $(`#header-paper-${currentpage}`).html('');
        if (headerhtml != '') {
            var height = $(`#layout-paper-${currentpage}`).css("height");
            var heightWithoutPx = height.replace("px", "");
            var heightAsNumber = parseInt(heightWithoutPx);
            let newHeight = heightAsNumber + 150;
            $(`#layout-paper-${currentpage}`).css('height', `${newHeight}px`);
        }

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
        var data = {
            'userId': userId,
            'type': type
        };
        for (var i = 1; i <= type; i++) {
            let value = $(`.paper-design-${i}`).html();
            $(`#paper-design-${i}`).removeAttr('style');
            data[`page${i}`] = value;
        }
        console.log(data)



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

        // var data = {
        //     'userId': userId,
        //     'description': JSON.stringify(htmlval),
        //     'type': type
        // };
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
    // const textareas = document.querySelectorAll('.dynamicTextarea');
    // const innerDivs = document.querySelectorAll('.inner-div');

    // textareas.forEach((textarea, index) => {
    //     textarea.addEventListener('input', () => {
    //         textarea.style.height = 'auto';
    //         textarea.style.height = textarea.scrollHeight + 'px';

    //         innerDivs[index].style.width = (innerDivs[index].offsetWidth + 2) + 'px';
    //     });
    // });
</script>