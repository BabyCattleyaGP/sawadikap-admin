<?php
// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Prestress Construction');
$pdf->SetTitle('Invoice Order');

$pdf->SetDisplayMode('real', 'default');

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);
// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

$table = '<head>
            <style>
            table.first {
              color: #003300;
              font-family: helvetica;
              font-size: 11pt;
              border: 1px solid black;
              width: 500px;
              align : center;
            }

            td {
              border: 1px solid black;
              border-collapse: collapse;
            }
          </style>
          </head>';

$table .= '<table class="first">';
$table .= '<tbody>
            <tr>
              <td width="240" height="20"> <br><br> Purchase Order - IDR Currency </td>
              <td width="240" height="20"  align="right">
              <br><br>
              <img src="http://pcindonesia.web.id/admin/assets/img/pci-logo.png" height="36px" width="57px" alt="pci-logo">
              </td>
            </tr>

            <tr>
              <td colspan="3" width="240" align="left">INCLUDE THESE NUMBERS IN YOUR INVOICE </td>
              <td colspan="5" width="240" align="left">For payment all invoices must include copy of Purchase Order, Delivery Note.
              </td>
            </tr>';
$table .=  '<tr>
              <td colspan="3" width="120">
              PO NO: PCI-PO-'.$order[0]->id.'
              </td>
              <td colspan="2" width="120">
              LOCATIONS: JAKARTA
              </td>
              <td colspan="5" width="120">
              Port Destination: ' .$data[0]->city. '
              </td>
              <td colspan="2" width="120">
              '.date("Y/m/d").'
              </td>
            </tr>

            <tr>
              <td colspan="7" width="240" align="left">ISSUED TO: <strong>PT PRESTRESS CONSTRUCTION INDONESIA</strong>
              </td>
              <td colspan="5" rowspan="3" width="240" align="left">
              SEND INVOICE TO: <strong>' .$data[0]->company.'</strong>
              </td>
            </tr>

            <tr>
              <td colspan="5" width="240" align="left"> ATTENTION: </td>
            </tr>

            <tr>
              <td colspan="5" width="240" align="left"> Bellinda </td>
            </tr>

            <tr>
              <td colspan="7" width="240" align="left"> ADDRESS: </td>
              <td colspan="5" width="240" align="left"> COMPANY ADDRESS: </td>
            </tr>

            <tr>
              <td colspan="7" width="240" align="left">Komplek Ruko Sentra Niaga Kalimalang Blok A1/12A Jl. Jend. Ahmad Yani, Bekasi - 17144
              </td>
              <td colspan="5" width="240" align="left"><strong>'.$data[0]->address. '</strong>
              </td>
            </tr>

            <tr>
              <td colspan="4" width="120">
                TELEPHONE NO.:
              </td>
              <td colspan="3" width="120">
                FAX NO:
              </td>
              <td colspan="4" width="120">
                TELEPHONE NO.:
              </td>
              <td colspan="3" width="120">
                FAX NO:
              </td>
            </tr>

            <tr>
              <td colspan="4" width="120">
                +62 819 32456765
              </td>
              <td colspan="3" width="120">
                -
              </td>
              <td colspan="4" width="120">
                ' .$data[0]->phone. '
              </td>
              <td colspan="3" width="120">
                ' .$data[0]->fax. '
              </td>
            </tr>

            <tr>
              <td colspan="2" width="30">NO. </td>
              <td colspan="2" width="170">DESCRIPTION</td>
              <td colspan="2" width="40">UNIT</td>
              <td colspan="2" width="70">QUANTITY</td>
              <td colspan="2" width="90">UNIT PRICE</td>
              <td colspan="2" width="80">AMOUNT</td>
            </tr>';

        $i=0;
         foreach ($order as $row)
         {
          $table .=  '<tr>
            <td width="30"> ' .++$i. '</td>
            <td colspan="2" width="170">' .$row->id_product.  '</td>
            <td colspan="2" width="40"> pcs </td>
            <td colspan="2" width="70">' .$row->jml_order. '</td>
            <td colspan="2" width="90">' .$row->price. '</td>
            <td colspan="2" width="80">' .$row->jml_order*$row->price. '</td>
            </tr>';
         }
         $table .= '</table>';

         $table .= '<table class="first">
                    <tbody>
                    <tr>
                      <td width="70" colspan="2">TERMS of PAYMENT</td>
                      <td width="30" colspan="2">[%]</td>
                      <td width="50" colspan="2">[VALUE]</td>
                      <td width="160" colspan="2">Notes</td>
                      <td width="90" colspan="2"><strong>SUB - TOTAL</strong></td>';

            foreach ($totalorder as $sum)  {
              $summ = $sum->total_price;
            }
          $table .= '<td width= "80" colspan="2">
                    <strong>'.$summ. '</strong>
                     </td>
                    </tr>

                    <tr>
                      <td width="30" colspan="2">

                      </td>
                      <td width="40" colspan="2">

                      </td>
                      <td width="30" colspan="2">

                      </td>
                      <td width="50" colspan="2">

                      </td>
                      <td width="160" colspan="2">

                      </td>
                    </tr>

                    <tr>
                    <td width="30" colspan="2">

                    </td>
                    <td width="40" colspan="2">

                    </td>
                    <td width="30" colspan="2">

                    </td>
                    <td width="50" colspan="2">

                    </td>
                    <td width="160" colspan="2">

                    </td>
                    <td width="90" colspan="2">
                    <strong>Freight &amp; Insurance</strong>
                    </td>
                    <td width="80" colspan="2">
                    Included
                    </td>
                  </tr>

                <tr>
                  <td width="310" colspan="2" align="left">
                  Name of Bank: Bank Mandiri
                  </td>
                  <td width="90" colspan="2">
                  <strong>PPn 10%</strong>
                  </td>
                  <td width="80" colspan="2">
                  Included
                  </td>
                </tr>

                <tr>
                  <td width="310" colspan="9" align="left">
                  Swift Code:
                  </td>
                </tr>

                <tr>
                  <td width="310" colspan="2" align="left">
                  Beneficiary Name: Prestress Construction Indonesia
                  </td>
                  <td width="90" colspan="2">
                  <strong>GRAND TOTAL</strong>
                  </td>
                  <td width="80" colspan="2">
                  <strong>' .$summ. '</strong>
                  </td>
                </tr>

                <tr>
                  <td width="310" colspan="9" align="left">
                  <strong>Account No.: 167.000.111.9295</strong>
                  </td>
                </tr>

                </tbody>
                </table>

                <table class="first">
                  <tbody>
                  <tr>
                    <td width="480" align="left">
                      REMARKS AND SPECIAL CONDITIONS:
                    </td>
                  </tr>

                  <tr>
                    <td width="480" align="left">
                    1.&nbsp;&nbsp;All prices are <strong>Included PPn 10%</strong>.
                    </td>
                  </tr>

                  <tr>
                    <td width="480" align="left">
                    2.&nbsp;&nbsp;All products should be in good condition.
                    </td>
                  </tr>

                  <tr>
                  <td width="480" align="left">
                      3.&nbsp;&nbsp;We needed MILL CERTIFICATE.
                    </td>
                  </tr>

                  <tr>
                    <td width="480" align="left">
                    4.&nbsp;&nbsp;Delivery should be with document of Delivery Note.
                    </td>
                  </tr>

                  <tr>
                    <td width="480" align="left">
                      5.&nbsp;&nbsp;All material must be new and free of corrosion.
                    </td>
                  </tr>

                  <tr>
                    <td width="480" align="left">
                      PURCHASED ORDER CONDITIONS as above.
                    </td>
                  </tr>
                  </tbody>
                  </table>

                  <table class="first">
                  <tbody>
                  <tr>
                    <td style="width: 160px;">
                      REQUESTED BY:
                    </td>
                    <td style="width: 160px;">
                      APPROVED BY:
                    </td>
                    <td style="width: 160px;">
                      CHECKED BY:
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 160px;">' .$data[0]->company. '</td>
                    <td style="width: 160px;">PT Prestress Construction Indonesia</td>
                    <td style="width: 160px;">PT Prestress Construction Indonesia</td>
                  </tr>

                  <tr>
                    <td style="width: 160px;">&nbsp;</td>
                    <td style="width: 160px; padding-top:180px;" height="70"><br><br><img src= "http://pcindonesia.web.id/admin/assets/img/ttd1.jpg" style="display: block;" height="65" width="90" alt="ttd1"></td>
                    <td style="width: 160px; padding-top:180px;" height="70"><br><br><img src= "http://pcindonesia.web.id/admin/assets/img/ttd2.jpg" style="display: block" height="60" width="100" alt="ttd2"></td>
                  </tr>
                  <tr>
                    <td style="width: 160px;">
                      <u>'.$data[0]->fname.' ' .$data[0]->lname. '</u>
                    </td>
                    <td style="width: 160px;">
                      <u>BELLINDA</u>
                    </td>
                    <td style="width: 160px;">
                      <u>HOTMAN SIANIPAR</u>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 160px;">
                      &nbsp;
                    </td>
                    <td style="width: 160px;">
                      Admin
                    </td>
                    <td style="width: 160px;">
                      Procurement
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 480;">
                     Note: Please fax back to us after you signed and stamped as your confirmation.
                    </td>
                  </tr>
                  </tbody>
                  </table>
                  <p>&nbsp;</p>';
  $table .= '</body> </html>';

  $pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
  // move pointer to last page
  $pdf->lastPage();

  // ---------------------------------------------------------

  //Close and output PDF document
  ob_clean();
  $pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'PO-PCI-'.$order[0]->id_user.'-'.$order[0]->id.'.pdf','F');
  //============================================================+
  // END OF FILE
  //============================================================+
