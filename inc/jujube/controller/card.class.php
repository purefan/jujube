<?php
require_once(dirname(dirname(__FILE__)) . '/model/card.model.php');

class Jujube {
    protected $_db;

    public function __construct() {
        $this->_db = new CardModel();
    }

    private function answerRequest(Array $answer) {
        $janswer = json_encode($answer);
        echo $janswer;
    }

    public function getRandomCard($location = NULL, $category = NULL){
        $card = $this->_db->getRandom($location, $category);
        $this->answerRequest($card);
    }

    public function getCard($id) {
        $card = $this->_db->getCard($id);
        $this->answerRequest($card);
    }

    public function getSimilarCards($id) {
        $cards = $this->_db->getSimilarCards($id);
        $this->answerRequest($cards);
    }
}
?>

