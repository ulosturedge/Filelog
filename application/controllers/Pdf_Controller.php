<?php

class Pdf_Controller extends MY_Controller {
    public function __construct() {
        parent:: __construct();

    }

    public function index() {

        echo "hello PDF";
    }

    public function generate_pdf() {




        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('Log Data');
        $pdf->SetHeaderData('','', PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->SetFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        $pdf->SetAutoPageBreak(TRUE, 10);
        $pdf->SetFont('helvetica', '', 12);
        //$pdf->AddPage();
        $pdf->AddPage('L', 'A4');
        $pdf->Cell(0, 0, 'LOG TABLE', 1, 1, 'C');

        // ob_start();         

        $content = '';

        $content = '<table width="757" border="1" cellpadding="2" cellspacing="3">


                        <tr>
                            <th>File#</th>
                            <th>File Name</th>
                            <th>Status</th>
                            <th>File Age</th>
                            <th>Last Modified</th>
                            <th>Born Date</th>

                        </tr>';






        $content .= $this->fetch_data();


        $content .= '</table>';






        //  $obj_pdf->AddPage();

        $pdf->writeHTML($content);
        // $html = ob_get_contents(); 
        ob_end_clean();


        $pdf->Output('sample.pdf', 'I');





    }


    public function excel_export() {

        if(isset($_POST["Export"])){

            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('ID', 'File Name', 'File Path', 'Born Date', 'Last Modified','','','','','','File Status')); 
            $logs = $this->get_all($this->log_table);
            $arrays = json_decode(json_encode($logs), True);

            foreach($arrays as $array) {

                fputcsv($output, $array); 

            }

            fclose($output);  
        } 
    }

    public function load_table() {

        $data['notes'] = $this->get_file_id_of_notes();
        $data['dashboards'] = $this->get_all($this->dashboard_table);
        $data['uid'] = $this->session->userdata('uid');
        $data['main_content'] = 'dashboard_table';
        $this->load->view('layouts/main', $data);


    }


    public function fetch_data() {
        $output ='';
        $notes = $this->get_file_id_of_notes();
        $dashboards = $this->get_all($this->log_table);

        $array = json_decode(json_encode($notes), True);
        foreach($dashboards as $dashboard):;
        $newborntime = date("F d Y H:i:s.", strtotime($dashboard->born_date));


        $output .= '
        <tr nobr="true">    

    <td>'.$dashboard->id.'</td>

    <td>'.$dashboard->filename.'</td>

    <td>'.$dashboard->file_status.'</td>

    <td>'.$dashboard->ago.'</td>

    <td>'.$dashboard->lastmodified.'</td>

    <td>'.$newborntime.'</td>



        </tr>

    ';        

        endforeach; 
        ob_start();
        return $output;
    }












}