<?php
    class PhpXmlParser
    {
        private $parser;
        private $betAmounts;
        private $totalAmount;

        public function __construct()
        {
            $this->betAmounts = array();
            $this->totalAmount = 0;
        }

        public function loadFile($data)
        {
            $this->parser = simplexml_load_file($data);
        }

        public function fillBetAmounts()
        {
            foreach($this->parser->Param->BetInfo as $betInfo){
                array_push($this->betAmounts, $betInfo->BetAmount);
            }
        }

        public function getSumBetAmounts()
        {
            foreach($this->betAmounts as $betAmount){
                $this->totalAmount += $betAmount;
            }
            echo $this->totalAmount;
        }
    }

    $parser = new PhpXmlParser;
    $parser->loadFile("BetHistory.xml");
    $parser->fillBetAmounts();
    $parser->getSumBetAmounts();
?>