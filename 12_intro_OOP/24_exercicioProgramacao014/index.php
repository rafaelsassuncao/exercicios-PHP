<?php
 
class Task {
    private $title;
    private $description;
    private $completed;
 
    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }
 
    public function markAsCompleted() {
        $this->completed = true;
    }
 
    public function markAsIncomplete() {
        $this->completed = false;
    }
 
    public function getTitle() {
        return $this->title;
    }
 
    public function getDescription() {
        return $this->description;
    }
 
    public function isCompleted() {
        return $this->completed;
    }
}