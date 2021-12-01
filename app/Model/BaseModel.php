<?php

namespace App\Model;

use Negan\Database\Model;

class BaseModel extends Model
{
    protected $_table;
    protected $_primary_key = 'id';
    protected $_filed = [];
    protected $_order = [];
    protected $_default_order = ['id' => 'DESC'];

}
