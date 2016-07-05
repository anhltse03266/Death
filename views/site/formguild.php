<?php
namespace app\models;

use Yii;
use Yii\base\Model;

class EntryFrom extends Model{
public $name;
public $email;
public function rules()
{
	return [
		[['name','email'], 'required'],
		['email','email'],
		];
	}
}	