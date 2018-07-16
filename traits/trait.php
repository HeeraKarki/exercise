<?php
trait log{
    protected function log($msg){
    echo "{$msg}\n";
    }
}
class Table {
    use log;
    public function save(){
        $this->log('save start');
    }
}
(new Table())->save();