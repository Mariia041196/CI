<?php
class Blog extends CI_Controller {
    public function creat_table()
    {
        $this->load->library('table');
        $this->table->generate($query);
    }
    //подключаем виды
	public function index()
	{
        $this->load->view('currency');
        $this->load->view('history');
    }
    //подключаем модели 
     public function model()
    {
        $this->load->model('CurrModel', '', TRUE);
    }
    // Кеширование базы через каждые 10 минут
     public function cashing()
    {
        $this->output->cache(10);
    }
    //класс создания таблиц 
}
