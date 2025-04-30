<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_gen {

    public $dompdf;

    public function __construct() {
        // Autoload DomPDF
        require_once APPPATH.'third_party/dompdf/autoload.inc.php';

        // Optional: Setting konfigurasi
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true); // agar bisa load gambar via URL

        // Inisialisasi dompdf
        $this->dompdf = new Dompdf($options);
    }
}
