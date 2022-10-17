<?php
class CardCollection {
    private array $arrayCards;
    private Card $card;

    function __construct($arrayCards){
        $this->arrayCards = $arrayCards;
    }

    function add($arrayCards) {
        $this->arrayCards = $arrayCards;
    }

    function addCard(Card $card) {
        $this->card = $card;
    }


    public function getCards(): array {
        return $this->cards;
    }

    public function setCards(array $cards): void {
        $this->cards = $cards;
    }

    public function getCard(): Card {
        return $this->card;
    }

    public function setCard(Card $card): void {
        $this->card = $card;
    }
}