<?php

class VoteController {

    private $model;

    public function __construct(VoteModel $model) {
        $this->model = $model;
    }

    public function Vote($entryId, $rating) {
        $this->model->Vote($entryId, $rating);
    }

}