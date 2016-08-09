<?php
/**
 * Powerd by ArPHP.
 *
 * Controller.
 *
 * @author ycassnr <ycassnr@gmail.com>
 */

/**
 * Default Controller of webapp.
 */
class BookController extends ArController
{
    /**
     * just the example of get contents.
     *
     * @return void
     */
     public function indexAction()
    {
        //$this->display();

    }
    public function showAction()
    {
    	//数据库连接--方法一
	    // $dbDefault = arComp('db.mysql')->read('default');
		// $result=$dbDefault->table('user')->queryAll();
		//数据库连接--方法二
		// $conn=DB::conn('book');
		// $result=DB::queryAll($conn);
		//数据库连接--方法三
		$db=BookModel::model()->getDb();
		$result=$db->queryAll();
		// print_r($model->queryAll());
		// var_dump($result);
		$this->assign(array('book'=>$result));
		$this->display();

    }

}