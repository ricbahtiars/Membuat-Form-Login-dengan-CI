<?php 
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class m_user extends Model{
    protected $table = 'user';
    protected $allowedFields =['firstname','lastname','email','password','data_created','data_update'];
}
?>