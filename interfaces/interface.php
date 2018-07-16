<?php
interface Tableinterface{
    public function save(array $data);
}
interface Loginterface{
    public function log($message);
}
interface count{
    public function count();
}
class Table implements Tableinterface, Loginterface,Count{
    public function save(array $data){
        return "foo";
    }
    public function log($message){
        return $message ."\n";
    }
    public function count(){
        return 10;
    }

}
echo (new Table())->save([]);
echo (new Table())->log('interfaces are pretty awesome');
echo (new Table())->count();

