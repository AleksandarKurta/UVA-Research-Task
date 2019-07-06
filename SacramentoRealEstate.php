<?php

class SacramentoRealEstate
{
    private $data = [];
    private $csvFile;
    private $thead = [];
    private $tbody = [];

    public function __construct($csvFile)
    {
        $this->csvFile = $csvFile;
        $this->readCSV();
    }

    public function readCSV()
    {
        foreach($this->csvFile as $line) {
            $this->data[] = str_getcsv($line);
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function getThead()
    {
        return $this->data[0];
    }

    public function getTBody()
    {
        for($i=0;$i<count($this->data);$i++){
            if($i > 0){
                $this->tbody[] = $this->data[$i]; 
            }
        }
        return $this->tbody;
    }
}

$sacramentoRealEstate = new SacramentoRealEstate(file("Sacramentorealestatetransactions.csv"));

