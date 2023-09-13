<div class="row">
    <div class="col-sm-12 form-header">
        <h1 class="form-title form-title-post-format">Choose a Epaper Format</h1>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    #paper-new {
        display: none;
    }

    #page-feature {
        padding-left: 40px;
        padding-top: 30px;
    }

    #paper_card .container {
        max-width: 700px;
    }

    #paper_card .card-body i {
        color: red;
        font-size: xx-large;
    }

    #next .row button {
        font-size: xx-large;
    }

    #paper-design {
        border: 2px dotted black;
        margin: 10px;
        padding: 5px;
    }

    #paper-new {
        height: 943px;
        max-width: 700px;
        margin: auto;
        background-color: white;
    }
</style>
<section id="main_section">
    <div id="containEpaper">
        <?php
        for ($i = 1; $i <= $epaper->type; $i++) {
            $propertyName = 'page' . $i;
            echo $epaper->$propertyName;
        } ?>
    </div>
</section>
<section id="page-feature">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-6 page-number">
                <?php for ($i = 1; $i <= $epaper->type; $i++) { ?>
                    <button class="btn btn-light page_number" data-id="<?= $i ?>"><strong><?= $i ?></strong></button>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <button id="generatePdfButton">Generate PDF</button>

            </div>
        </div>
    </div>
</section>

<input type="hidden" id="currentpage" value="1">
<script>
    $(document).ready(function() {
        $('#generatePdfButton').click(function() {
            let type = '<?= $epaper->type ?>';
            const doc = new jsPDF();
            for (var j=1; j <=1 ; j++ ) {
                const content = $(`.paper-new-${j}`).html();
                console.log(content);
                doc.fromHTML(`<div class="mainPDFHTML">${content}</div>`, 10, 10, {
                    width: 180
                });
            }
            // $('.page').each(function(index, element) {
                
            //     if (index !== 0) {
            //         doc.addPage();
            //     }

            //     const content = $(element).html();
            //     //   doc.text(10, 10, content);
            //     doc.fromHTML(content, 10, 10, {
            //         width: 180
            //     });
            // });

            // Save the multi-page PDF and trigger a download
            // doc.save('multi-page.pdf');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('[id^=paper-new]').hide();
        $(".paper-new-1").show();
    });
    $("body").delegate(".page_number", "click", function() {
        var id = $(this).data('id');
        $(".paper-design-inner").hide();
        $(`.paper-new-${id}`).show();
        $("#currentpage").val(id);

    });

    // $('#generatePdfButton').click(function() {
    //     let type = '<?= $epaper->type ?>';

    //     const pdf = new jsPDF();

    //     for (var j=1; j <=type ; j++ ) {
    //         const content = $(`.paper-new-${j}`).html();
    //         console.log(content);
    //         pdf.fromHTML(content, 10, 10, {
    //             'width': 180
    //         });
    //     };




    //     // // Save the PDF and trigger a download
    //     //  pdf.save('multi-page.pdf');
    // });
</script>