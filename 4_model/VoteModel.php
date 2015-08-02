<?php

class VoteModel {

    private $servername = "localhost";
    private $username = "root";
    private $password = "1234";
    private $db_name = "votingapp";
    private $securityLevel = "";

    public function __construct($securityLevel) {
        $this->securityLevel = $securityLevel;
    }

    public function Vote($entryId, $rating) {
        $entry = $this->GetEntry($entryId);
        $newEntry = $this->setNewEntryValues($entry, $rating);

        try {
            $conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->db_name, $this->username, $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->
                    prepare("UPDATE entry_ratings SET rating_total_average=" .
                    $newEntry->RatingTotalAverage . ", rating_count=" .
                    $newEntry->RatingCount . ", rating_total_raw=" .
                    $newEntry->RatingTotalRaw . " WHERE identry_ratings=" . $entryId);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function GetEntry($entryId) {
        try {
            $conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->db_name, $this->username, $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM entry_ratings WHERE identry_ratings=" . $entryId);
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->fetch();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $entry = new Entry();
        $entry->Id = $result[0];
        $entry->Name = $result[1];
        $entry->RatingTotalAverage = $result[2];
        $entry->RatingCount = $result[3];
        $entry->RatingTotalRaw = $result[4];
        $entry->Description = $result[5];

        return $entry;
    }
    
    public function GetAllEntries() {
        try {
            $conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->db_name, $this->username, $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM entry_ratings");
            $stmt->execute();
            // set the resulting array to associative
            $results = $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $entries = array();
        
        foreach ($results as $result) {
            $entry = new Entry();
            $entry->Id = $result[0];
            $entry->Name = $result[1];
            $entry->RatingTotalAverage = $result[2];
            $entry->RatingCount = $result[3];
            $entry->RatingTotalRaw = $result[4];
            $entry->Description = $result[5];
            
            array_push($entries, $entry);
        }
        
        usort($entries, function($a, $b){
            if($a->RatingTotalRaw < $b->RatingTotalRaw){
                return 1;
            } else if($a->RatingTotalRaw > $b->RatingTotalRaw){
                return -1;
            }
            return 0;
        });
        
        return $entries;
    }
    
    private function setNewEntryValues(Entry $entry, $newRating){
        if($this->securityLevel == 0){
            $entry->RatingTotalRaw += $newRating;
        }else {
            if($newRating > 5){
                $newRating = 5;
            }
            $entry->RatingTotalRaw += $newRating;
        }
        $entry->RatingCount += 1;
        $entry->RatingTotalAverage = $entry->RatingTotalRaw / $entry->RatingCount;
        
        return $entry;
    }

}
