<?php
    namespace app\models;
    use yii\db\ActiveRecord; //provides functionalities for interacting with the database


    class posts extends ActiveRecord{
        //creating variables from table columns
        private $title;
        private $description;
        private $category;

        //setting rules , for form validations
        public function rules(){
            return [
                [['title','description','category'],'required']  //form validation
            ];
        }
    }
?>