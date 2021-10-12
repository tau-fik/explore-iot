<?php

namespace App\Controllers;

use App\Models\Ina1Model;
use App\Models\Ina2Model;
use App\Models\AnemometerModel;
use App\Models\BateraiModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExelReport extends BaseController
{

    public function __construct()
    {
        $this->statusLogin();
        $this->modelIna1 = new Ina1Model;
        $this->modelIna2 = new Ina2Model;
        $this->modelAnemo = new AnemometerModel;
        $this->modelBat = new BateraiModel;
    }

    public function exelIna1()
    {
        $data = $this->modelIna1->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal dan Waktu')
            ->setCellValue('C1', 'Nilai Volt')
            ->setCellValue('D1', 'Nilai Arus');

        $column = 2;
        // tulis data mobil ke cell
        $i = 1;
        foreach ($data as $d) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $i++)
                ->setCellValue('B' . $column, $d['created_at'])
                ->setCellValue('C' . $column, $d['data_volt'])
                ->setCellValue('D' . $column, $d['data_arus']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Sensor Ina1';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function exelIna2()
    {
        $data = $this->modelIna2->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal dan Waktu')
            ->setCellValue('C1', 'Nilai Volt')
            ->setCellValue('D1', 'Nilai Arus');

        $column = 2;
        // tulis data mobil ke cell
        $i = 1;
        foreach ($data as $d) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $i++)
                ->setCellValue('B' . $column, $d['created_at'])
                ->setCellValue('C' . $column, $d['data_volt'])
                ->setCellValue('D' . $column, $d['data_arus']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Sensor Ina2';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function exelAnemo()
    {
        $data = $this->modelAnemo->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal dan Waktu')
            ->setCellValue('C1', 'Nilai Anemometer');

        $column = 2;
        // tulis data mobil ke cell
        $i = 1;
        foreach ($data as $d) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $i++)
                ->setCellValue('B' . $column, $d['created_at'])
                ->setCellValue('C' . $column, $d['data_anemometer']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Sensor Anemometer';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function exelBat()
    {
        $data = $this->modelBat->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal dan Waktu')
            ->setCellValue('C1', 'Nilai Battery');

        $column = 2;
        // tulis data mobil ke cell
        $i = 1;
        foreach ($data as $d) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $i++)
                ->setCellValue('B' . $column, $d['created_at'])
                ->setCellValue('C' . $column, $d['data_baterai']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Battery';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
