<?php

    class posthasanimal{

        private $Post_idPost;
        private $AnimalStatus_idAnimalStatus;

        public function getPostIdPost(){
            return $this->$Post_idPost;
        }

        public function getAnimalStatusIdAnimalStatus(){
            return $this->$AnimalStatus_idAnimalStatus
        }

        public function setPostIdPost(){
            $this->postIdPost=$Post_idPost;
        }

        public function getAnimalStatusIdAnimalStatus(){
            $this->animalStatusIdAnimalStatus=$AnimalStatus_idAnimalStatus
        }

    }

?>