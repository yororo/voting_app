<?php

class EntryListView {

    private $voteModel;

    public function __construct(VoteModel $voteModel) {
        $this->voteModel = $voteModel;
    }

    public function output() {
        $entries = $this->voteModel->GetAllEntries();
        
        $html = "";
        
        foreach($entries as $entry){
            $entryView = new EntryView($this->voteModel);
            $html = $html . "<div class='row'>". $entryView->outputByEntry($entry) ."</div>";
        }
        
        return $html;
    }

}
