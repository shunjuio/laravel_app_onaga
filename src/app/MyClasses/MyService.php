<?php
namespace App\MyClasses;

use App\MyClasses\MyServiceInterface;


class MyService implements MyServiceInterface
{
    private $serial;
    private $id= -1;
    private $msg = 'no id...';
    private $data =['Hello', 'Welcome', 'Bye'];


//    public function  __construct(int $id)
//    {
//        $this->setId($id);
//        $this->serial = rand();
//        echo "「" . $this->serial . "」";
//    }

    public function setId($id)
    {
        $this->id = $id;
        if($id >= 0 && $id < count($this->data))
        {
            $this->msg = "select 　id:" . $id . ', data:"' . $this->data[$id] . '"';
        }
    }
    public function say()
    {
        return $this->msg;
    }

    public function data(int $id)
    {
        return $this->data[$id];
    }
    public function alldata()
    {
        return $this->data;
    }
}
