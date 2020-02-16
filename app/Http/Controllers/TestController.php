<?php
namespace App\Http\Controllers;

class TestController{
    public function index(){
        $val = "Test";
        $data = array('test1','test2','test3','test4');
        return view('test.index',compact('val','data'));
        return view('test.index',compact('val'));
        return view('test.index')->with('test',$val);
    }
} 

?>