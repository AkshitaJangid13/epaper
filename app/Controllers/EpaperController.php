<?php

namespace App\Controllers;
require_once APPPATH . "ThirdParty/intervention-image/vendor/autoload.php";

use App\Models\EpaperTemplateModel;
use App\Models\EpaperDesignModel;
use App\Models\AdvertisementModel;
use App\Models\EpaperModel;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
require_once APPPATH . "ThirdParty/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\FontMetrics;
use Dompdf\Font;
use Dompdf\Canvas;

class EpaperController extends BaseAdminController
{
    protected $epaperTemplateModel;
    protected $epaperDesignModel;


    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->epaperTemplateModel = new EpaperTemplateModel();
        $this->epaperDesignModel = new EpaperDesignModel();
        $this->advertisementModel = new AdvertisementModel();
        $this->epaperModel = new EpaperModel();
    }

    public function index()
    {
        $session = \Config\Services::session();
        $userId = $session->get('vr_ses_id');
        $data['epaperData'] = $this->epaperModel->getEpaperByUserId($userId);
        $data['title'] = "Epaper";
        echo view('admin/includes/_header', $data);
        echo view('admin/epaper/index', $data);
        echo view('admin/includes/_footer');
    }
    public function epaperFormat()
    {
        $data['title'] = "Choose a Epaper Format";
        echo view('admin/includes/_header', $data);
        echo view('admin/epaper/epaper_format', $data);
        echo view('admin/includes/_footer');
    }


    public function create()
    {
        $session = \Config\Services::session();
        $data['title'] = 'Epaper';
        $data['type']  = inputGet('type');
        $data['advertisement'] = $this->advertisementModel->getAdvertisements();
        $data['template'] = $this->epaperTemplateModel->getItems();
        $data['userId'] = $session->get('vr_ses_id');
        echo view('admin/includes/_header', $data);
        echo view('admin/epaper/epaper_create', $data);
        echo view('admin/includes/_footer');
    }

    public function getSubcategory()
    {
        $id = inputPost('id');
        $data = $this->epaperTemplateModel->getSubItems($id);
        return json_encode($data);
    }

    public function getDesign()
    {
        $id = inputPost('id');
        $data = $this->epaperDesignModel->getDesign($id);
        return json_encode($data);
    }

    public function getDesignById()
    {
        $id = inputPost('id');
        $data = $this->epaperDesignModel->getDesignById($id);
        return json_encode($data);
    }

    public function saveEpaper()
    {
        $this->epaperModel->addEpaper();
        die("sdfssssssssssssssssssssssss");
    }

    public function deleteEpaper($id)
    {
        $this->epaperModel->deleteEpaper($id);
        $this->session->setFlashdata('success', trans("msg_deleted"));
        return redirect()->to(adminUrl('epaper'));
    }

    public function viewEpaper($id)
    {
        $epaper = $this->epaperModel->getEpaper($id);
        $data['epaper'] = $epaper;
        $data['title'] = "Epaper";
        echo view('admin/includes/_header', $data);
        echo view('admin/epaper/epaper_view', $data);
        echo view('admin/includes/_footer');
    }

    public function saveImage()
    {

        $image = $this->epaperModel->updloadImage();
        $imgBaseURL = getBaseURLByStorage($image['storage']);
        echo $imageUrl = $imgBaseURL . $image['image'];
    }

    public function downloadPdf($id)
    {


        $epaper = $this->epaperModel->getEpaper($id);
        $imagename = $epaper->id . 'output';
        $pages = [];
        $page1 = $this->generateImageforpdf($epaper->page1, $imagename . '1');
        $page2 = $this->generateImageforpdf($epaper->page1, $imagename . '2');
        $page3 = $this->generateImageforpdf($epaper->page1, $imagename . '3');
        $page4 = $this->generateImageforpdf($epaper->page1, $imagename . '4');
        $baseUrl = base_url() . "/assets/img/" . $imagename;
        $pages[] = '<div style="background: url(' . $baseUrl . '1.png); background-size: cover; height: 100%;"></div>';
        $pages[] = '<div style="background: url(' . $baseUrl.'2.png);  background-size: cover;height: 100%;"></div>';
        $pages[] = '<div style="background: url(' . $baseUrl.'3.png);  background-size: cover; height: 100%;"></div>';
        $pages[] = '<div style="background: url(' . $baseUrl.'4.png);  background-size: cover; height: 100%;"></div>';


        if ($epaper->type == 8) {
            $page5 = $this->generateImageforpdf($epaper->page5, $imagename . '5');
            $page6 = $this->generateImageforpdf($epaper->page6, $imagename . '6');
            $page7 = $this->generateImageforpdf($epaper->page7, $imagename . '7');
            $page8 = $this->generateImageforpdf($epaper->page8, $imagename . '8');
            $pages[] = [
                '<div style="background-image: url(' . $baseUrl . '/assets/img/' . $page5 . '); background-size: cover;height: 100%;"></div>',
                '<div style="background-image: url(' . $baseUrl . '/assets/img/' . $page6 . '); background-size: cover; height: 100%;"></div>',
                '<div style="background-image: url(' . $baseUrl . '/assets/img/' . $page7 . '); background-size: cover; height: 100%;"></div>',
                '<div style="background-image: url(' . $baseUrl . '/assets/img/' . $page8 . '); background-size: cover; height: 100%;"></div>',
            ];
        }
        $data['pages'] = $pages;

        $viewContent = view('admin/epaper/epaper_pdf',  $data);
        // $viewContent = view('admin/epaper/epaper_pdf');
        $width = 792; // 1 inch = 72 points
        $height = 1116;
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);
        // $options->set('margin-top', 0);
        // $options->set('margin-right', 0);
        // $options->set('margin-bottom', 0);
        // $options->set('margin-left', 0);
        // $options->set('debug', true);
        // $options->set('defaultPaperSize', [0, 0, $width, $height]);
        $dompdf = new Dompdf($options);
        //    for($i=0; $i < count($pages);$i++)
        //  foreach ($pages as $html) {

        //     $dompdf->loadHtml($html);
        //     $dompdf->setPaper([0, 0, $width, $height], 'portrait');

        //     $dompdf->render();
        //     $dompdf->addPage();
        // }

        $dompdf->loadHtml($viewContent);
        // $dompdf->setPaper(1116, 792);
        $dompdf->setPaper([0, 0, $width, $height]);
        $dompdf->render();
        // Display the PDF content inline
        $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

        exit(0);

        // // Render the PDF
        // $dompdf->render();

        // // Display the PDF content inline
        // $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

        // exit(0);

        // Save the PDF to a file or send it to the browser for download
        $dompdf->stream('output.pdf', ['Attachment' => false]);


        // $viewContent = view('admin/epaper/epaper_pdf',$epaper);
        // echo file_get_contents($viewContent);
        // // echo  $viewContent;
        // die;





        // $htmlContent = '<html><body><h1>Hello, World!</h1></body></html>';

        // // Save HTML content to a temporary file
        // $htmlFilePath = ROOTPATH ."assets/temp.html";
        // //         
        // file_put_contents($htmlFilePath, $htmlContent);

        // // Define the image file path
        // $imageFilePath = ROOTPATH ."assets/img/output.png";

        // // Use wkhtmltoimage to convert HTML to image
        // $command = "C:\Program Files\wkhtmltopdf\bin $htmlFilePath $imageFilePath";
        // shell_exec($command);

        // Clean up temporary HTML file
        // unlink($htmlFilePath);

        //     $epaper = $this->epaperModel->getEpaper($id);
        //     // print_r($epaper);die;
        //     // Create a blank image with the desired width and height
        //     $width = 400;
        //     $height = 200;
        //     $image = imagecreatetruecolor($width, $height);

        //     // Set the background color (white)
        //     $bgColor = imagecolorallocate($image, 255, 255, 255);
        //     imagefill($image, 0, 0, $bgColor);

        //     // Set text color (black)
        //     $textColor = imagecolorallocate($image, 0, 0, 0);

        //     // Define the HTML content to be converted to an image
        //     $htmlContent = $epaper->page1;

        //     // Create an image from HTML content using GD
        //     imagestring($image, 5, 50, 50, $htmlContent, $textColor); // You can use other GD functions for more complex rendering

        //     // Set the content type to be a PNG image
        //     header('Content-Type: image/png');

        //     // Output the image as a PNG
        //     imagepng($image);

        //     // Clean up resources
        //    $data= imagedestroy($image);
        //    echo $data;die;

        // echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAD1BMVEXw8PD');




        // HTML content you want to convert to an image
        //         $htmlContent = '<html><body><h1>Hello, World!</h1></body></html>';

        //         // Set the file paths
        //         $htmlFilePath = ROOTPATH ."assets/temp.html";
        //         $imageFilePath = ROOTPATH ."assets/output.png";

        //         // Save HTML content to a temporary file
        //         file_put_contents($htmlFilePath, $htmlContent);

        //         // Generate the image from HTML using wkhtmltoimage
        //         $command = "wkhtmltoimage $htmlFilePath $imageFilePath";
        //         $output =  shell_exec($command);
        //         echo "Output: $output<br>";

        //         // Output the image or do further processing as needed
        //         header('Content-Type: image/png');
        //         readfile($imageFilePath);
        //         error_reporting(E_ALL);
        // ini_set('display_errors', 1);

        // Clean up temporary files
        // unlink($htmlFilePath);
        // unlink($imageFilePath);



        // Create a blank image with the desired width and height
        // $width = 400;
        // $height = 200;
        // $image = imagecreatetruecolor($width, $height);

        // // Set the background color (white)
        // $bgColor = imagecolorallocate($image, 255, 255, 255);
        // imagefill($image, 0, 0, $bgColor);

        // // Set text color (black)
        // $textColor = imagecolorallocate($image, 0, 0, 0);

        // // Define the HTML content to be converted to an image
        // $htmlContent = '<html><body><h1>Hello, World!</h1></body></html>';

        // // Create an image from HTML content using GD
        // imagestring($image, 5, 50, 50, $htmlContent, $textColor); // You can use other GD functions for more complex rendering

        // // Set the content type to be a PNG image
        // header('Content-Type: image/png');

        // // Output the image as a PNG
        // imagepng($image);

        // // Clean up resources
        // imagedestroy($image);




        // Output the PDF to the browser or save it to a file
        // $pdf->Output('hindi_pdf.pdf', 'I');



        // die;

        // $width = 792; // 1 inch = 72 points
        // $height = 1116;
        // $viewContent = view('admin/epaper/epaper_pdf');
        // $options = new Options();
        // $options->set('isHtml5ParserEnabled', true);
        // $options->set('isPhpEnabled', true);
        // $options->set('isRemoteEnabled', true);
        // $options->set('debug', true);

        // $options->set('defaultPaperSize', [0, 0, $width, $height]); //
        //     $font = ROOTPATH . "assets/fonts/Noto_Sans/NotoSans-Italic.ttf"; // Replace with the actual font file path
        //     echo APPPATH;
        //     echo "<br>";
        //    echo APPPATH . "ThirdParty/pdf/vendor/autoload.php";
        //     echo "<br>";
        //     echo ROOTPATH . "assets/fonts/Noto_Sans/NotoSans-Italic.ttf"; die;
        // Register the font with Dompdf
        // $options->set('defaultFont', 'arivndr-pomt-font'); // Replace with your font name
        // $options->set('fontDir', 'C:/xampp/htdocs/epaper/assets/fonts/');

        // $dompdf = new Dompdf($options);
        // $dompdf->setPaper(1116, 792);
        // $dompdf->setPaper([0, 0, $width, $height], 'portrait');



        // $dompdf->getCanvas()->getFontMetrics()->registerFont($font);

        // Set the font directory
        //         $fontDir = 'C:/xampp/htdocs/epaper/assets/fonts/';
        //         $dompdf->getOptions()->set('fontDir', $fontDir);
        //         // Create a Canvas object
        // $canvas = new Canvas();

        // // Create a FontMetrics object with the Canvas object as the first argument
        // $fontMetrics = new FontMetrics($canvas);

        //         // Register the font with Dompdf
        //         // $fontMetrics = new FontMetrics();
        //         $font = new Font('arivndr-pomt-font'); // Replace with your font name
        //         $font->saveAdobeFontMetrics($fontMetrics);

        //         $dompdf->setFontMetrics($fontMetrics);

        // Load your HTML content into dompdf
        // $dompdf->loadHtml($viewContent);

        // // Render the PDF
        // $dompdf->render();

        // // Display the PDF content inline
        // $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

        // exit(0);

        // $options = new Options();
        // $options->set('isPhpEnabled', true);
        // $options->set('defaultFont', 'Arial Unicode MS');


        // // $options->set('fontDir', 'C:/xampp/htdocs/epaper/assets/fonts/');

        // $dompdf = new Dompdf($options);
        // $dompdf->getFontMetrics()->registerFont(new \FontMetrics($options->get('fontDir') . 'hind-font'));

        // $dompdf->setBasePath('C:/xampp/htdocs/epaper/assets/fonts/hind-font.css');
        // Load your HTML content into dompdf
        // $dompdf->loadHtml($viewContent);
        // // Render the PDF
        // $dompdf->render();
        // // Display the PDF content inline
        // $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

        // exit(0);


        // $options = new Options();
        // $options->set('isHtml5ParserEnabled', true);
        // $options->set('isPhpEnabled', true);
        // $dompdf = new Dompdf($options);
        // $dompdf->loadHtml($viewContent);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();

        // // Send appropriate headers
        // header('Content-Type: application/pdf'); // Set content type
        // header('Content-Disposition: attachment; filename="document.pdf"');

        // $dompdf->stream();
        // echo $viewContent;
        // die;
    }


    // public function downloadPdf($id)
    // {
    //     $epaper = $this->epaperModel->getEpaper($id);
    //     $data['epaper'] = $epaper;
    //     $data['title'] = "Epaper";
    //     $data['dataArray'] = json_decode($epaper->description, true);
    //      // Load the view content
    //      $viewContent = view('admin/epaper/epaper_pdf', $data);
    //     // echo $viewContent;die;

    //      // Create a new Dompdf instance
    //      $options = new Options();
    //      $options->set('isHtml5ParserEnabled', true);
    //      $options->set('isPhpEnabled', true);
    //      $dompdf = new Dompdf($options);

    //      // Load the HTML content into Dompdf
    //      $dompdf->loadHtml($viewContent);

    //      // Set paper size and orientation
    //      $dompdf->setPaper('A3', 'portrait');

    //      // Render the PDF
    //      $dompdf->render();

    //      // Output the PDF content
    //      $pdfContent = $dompdf->output();

    //      // Set headers to prompt download
    //      header('Content-Type: application/pdf');
    //      header('Content-Disposition: attachment; filename="generated_pdf.pdf"');
    //      header('Content-Length: ' . strlen($pdfContent));

    //      // Output the PDF content
    //      echo $pdfContent;

    //     $epaper = $this->epaperModel->getEpaper($id);
    //     $dataArray = json_decode($epaper->description, true);
    //     // Create a new Dompdf instance
    //     $options = new Options();
    //     $options->set('isHtml5ParserEnabled', true);
    //     $options->set('isPhpEnabled', true);
    //     $dompdf = new Dompdf($options);

    //     // Generate content dynamically
    //     $pageCount = 5; // Number of pages

    //     $html = '<!DOCTYPE html><html><head><title>Multiple Page PDF</title></head><body>';
    //     for ($i = 1; $i <= count($dataArray); $i++) {
    //         // $html .= '<div style="height:943px;">';
    //         $html .= $dataArray[$i];
    //         // $html .= '</div>';
    //     }
    //     $html .= '</body></html>';
    //      echo $html;die;
    //     // Load the HTML content into Dompdf
    //     $dompdf->loadHtml($html);

    //     // Set paper size and orientation
    //     $dompdf->setPaper('A4', 'portrait');

    //     // Render the PDF
    //     $dompdf->render();

    //     // Get the PDF content
    //     $pdfContent = $dompdf->output();

    //     // Set headers to prompt download
    //     header('Content-Type: application/pdf');
    //     header('Content-Disposition: attachment; filename="multiple_page_pdf.pdf"');
    //     header('Content-Length: ' . strlen($pdfContent));

    //     // Output the PDF content
    //     echo $pdfContent;
    // }
    public function generateImageforpdf($content, $imagename)
    {
        $htmlContent = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Multiple Page PDF</title><style>@font-face{font-family:Noto Sans;font-weight:400;font-style:normal;font-variant:normal;src:url(https://epapermedia.in/assets/fonts/noto_sans/NotoSans-Medium.ttf) format("truetype")}body,div,input,p,table,td,textarea,th{font-family:"Noto Sans",sans-serif}body,html{margin:0;padding:0;padding-top:2px}</style></head><body><div id="paper-design" class="paper-design-html paper-design-1" background-color: white; height: 1000px; max-width: 1056px; display: block;>' . $content . '</div></body></html>';
        // // Save HTML content to a temporary file
        $htmlFilePath = ROOTPATH . "assets/temp.html";
        file_put_contents($htmlFilePath, $htmlContent);
        // $imageHeight = 1488; // Increase the height
        // $imageWidth = 1056;

        // Define the image file path
        $imageFilePath = ROOTPATH . "assets/img/" . $imagename . ".png";
        // Use wkhtmltoimage to convert HTML to image
        $wkhtmltoimagePath = 'C:\Program Files\wkhtmltopdf\bin\wkhtmltoimage.exe'; // Adjust the path to the executable
        // $command = "\"$wkhtmltoimagePath\" --height $imageHeight --width $imageWidth \"$htmlFilePath\" \"$imageFilePath\"";

        $command = "\"$wkhtmltoimagePath\" \"$htmlFilePath\" \"$imageFilePath\"";
        shell_exec($command);
        if (file_exists($imageFilePath)) {
            $desiredWidth = 980;  // Replace with your desired width
            $desiredHeight = 1380; 
            $resizedImagePath = ROOTPATH . "assets/img/compressed_" . $imagename . ".png";

            $img = Image::make($imageFilePath);

            // Resize the image to the desired dimensions
            $img->resize($desiredWidth,  $desiredHeight); // Replace with your desired width and height

            // Save the resized image
            $img->save( $resizedImagePath,100);

            // $imagick = new Imagick($imageFilePath);
            // $imagick->resizeImage($desiredWidth, $desiredHeight, Imagick::FILTER_LANCZOS, 1);
            // $imagick->writeImage($resizedImagePath);
            // $imagick->setImageCompressionQuality(100);


            // Load the original image
        //     $originalImage = imagecreatefrompng($imageFilePath);

        //     // Define the desired width and height for resizing
        //    // Replace with your desired height

        //     // Create a new image with the desired dimensions
        //     $resizedImage = imagecreatetruecolor($desiredWidth, $desiredHeight);

        //     // Resize the original image to fit within the desired dimensions
        //     imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $desiredWidth, $desiredHeight, imagesx($originalImage), imagesy($originalImage));



        //     // Define the path for the resized image
           
        //     // Save the resized image
        //     imagepng($resizedImage, $resizedImagePath);

        //     // Compress the resized image and save it as a .png file
        //     $compressedImagePath = ROOTPATH . "assets/img/compressed_" . $imagename . ".jpeg";
        //     // $compressionLevel = 0; // Adjust the compression level (0-9, 9 is highest compression)

        //     // imagepng($resizedImage, $compressedImagePath);
        //     $compressionLevel = 9; // Adjust the compression level (0-9, 9 is highest compression)
        //     imagepng($resizedImage, $compressedImagePath, $compressionLevel);

        //     // Destroy the image resources
        //     imagedestroy($originalImage);
        //     imagedestroy($resizedImage);
        }
    }
}
