<?php

class EntryView {

    private $voteModel;
    private $entryId;

    public function __construct(VoteModel $voteModel) {
        $this->voteModel = $voteModel;
    }

    public function outputById($entryId) {
        $entry = $this->voteModel->GetEntry($entryId);
        
        return $this->htmlOutput($entry);
    }
    
    public function outputByEntry(Entry $entry) {
        return $this->htmlOutput($entry);
    }
    
    private function htmlOutput(Entry $entry){
        $html = "<form id='bobForm' action='index.php'>
                <div class='col s9'>
                    <h4>".$entry->Name."</h4>
                    <p>
                    ".$entry->Description."
                    </p>
                    <a class='dropdown-button btn vote-dropdown' href='#' data-activates='vote".$this->entryId."'>Vote</a>

                    <ul id='vote".$this->entryId."' class='dropdown-content'>
                        <li><a href='#' onclick='Vote(" . $entry->Id . ", 1);'>1</a></li>
                        <li class='divider'></li>
                        <li><a href='#' onclick='Vote(" . $entry->Id . ", 2);'>2</a></li>
                        <li class='divider'></li>
                        <li><a href='#' onclick='Vote(" . $entry->Id . ", 3);'>3</a></li>
                        <li class='divider'></li>
                        <li><a href='#' onclick='Vote(" . $entry->Id . ", 4);'>4</a></li>
                        <li class='divider'></li>
                        <li><a href='#' onclick='Vote(" . $entry->Id . ", 5);'>5</a></li>
                    </ul>
                </div>
                <div class='col s3 rating_div'>
                    <p class='rating'>
                        " . $entry->RatingTotalRaw . "
                    <p>
                </div>
            </form>";
        
        return $html;
    }
}