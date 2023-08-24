<?php

namespace App\Controllers;

use App\Models\EpaperTemplateModel;
use App\Models\EpaperDesignModel;
use App\Models\AdvertisementModel;
use App\Models\EpaperModel;

require_once APPPATH . "ThirdParty/pdf/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

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
        $data['dataArray'] = json_decode($epaper->description, true);
        echo view('admin/includes/_header', $data);
        echo view('admin/epaper/epaper_view', $data);
        echo view('admin/includes/_footer');
    }

    public function downloadPdf($id){
        echo $id; die;
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
}
