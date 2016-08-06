<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//layout('layout');
      $this->display();
    }
    public function page(){
    	$id = $_GET['id'];
    	$this->display('index/page/'.$id);
    }
    public function news(){
    	$id = $_GET['id'];
    	$this->display('index/news/'.$id);
    }
    public function news_view(){
    	$id = $_GET['id'];
    	$this->display('index/news/news_view');
    }
    public function teamnews(){
        $id = $_GET['id'];
        $this->display('index/teamnews/'.$id);
    }
    public function teamnews_view(){
        $id = $_GET['id'];
        $this->display('index/teamnews/teamnews_view');
    }
    public function xspage(){
        $id = $_GET['id'];
        $this->display('index/xspage/'.$id);
    }
    public function event_view(){
        $id = $_GET['id'];
        $this->display('index/event_view/'.$id);
    }
    public function enews_view(){
        $id = $_GET['id'];
        $this->display('index/event_view/enews_view');
    }
    public function edupage(){
        $id = $_GET['id'];
        $this->display('index/edupage/'.$id);
    }
    public function edupage2(){
        $id = $_GET['id'];
        $this->display('index/edupage2/'.$id);
    }
    public function teamwork(){
        $id = $_GET['id'];
        $this->display('index/teamwork/'.$id);
    }
}

















