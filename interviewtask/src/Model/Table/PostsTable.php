<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
    public function validationDefault(Validator $validator): Validator
    {
        $validator->requirePresence(['fname','email','pass','dob','phone','height','weight']);
        $validator->allowEmptyFile('image');
        return $validator;
    }
}

?>