<?php
/**
 * Powerd by ArPHP.
 *
 * Model.
 *
 * @author ycassnr <ycassnr@gmail.com>
 */

/**
 * Default Model of webapp.
 */
class BookModel extends ArModel
{
	public $tableName='book';

    static public function model($class = __CLASS__)
    {
        return parent::model($class);

    }

}