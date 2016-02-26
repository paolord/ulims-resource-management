<?php
require_once __DIR__.'/vendor/autoload.php';

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

class readInitialInventoryFile {
    
    public function read($filePath){    
        $reader = ReaderFactory::create(Type::XLSX); 

        $reader->open($filePath);
        
        $theSheet = null;
        
        foreach ($reader->getSheetIterator() as $sheet) {
            if($sheet->getName() === "Inventory"){
                $theSheet = $sheet;
                break;
            }
        }
        
        $data = [];
        
        foreach ($theSheet->getRowIterator() as $row) {
            $data[] = array(
                "chemical_name" => $row[0],
                "CAS" => $row[1],
                "product_number" => $row[2],
                "location" => $row[3],
                "manufacturer" => $row[4],
                "supplier" => $row[5],
                "quantity" => $row[6],
                "unit" => $row[7],
                "qty_remaining" => $row[8],
                "container_type" => $row[9],
                "expiry_date" => $row[10],
                "date_acquired" => $row[11],
                "date_opened" => $row[12]
            );
        }

        $reader->close();
        
        return $data;
    }
    
}