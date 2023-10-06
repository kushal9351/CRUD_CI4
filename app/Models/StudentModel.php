<?php 
    namespace App\Models;

    use CodeIgniter\Model;  

    class StudentModel extends Model{

        protected $table = 'ci4';
        protected $primaryKey = 'id';
        protected $allowedFields = [
            'name',
            'email',
            'phone',
            'course',
        ]; 

    }


?>