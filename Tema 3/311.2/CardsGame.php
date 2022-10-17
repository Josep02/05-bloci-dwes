<?php

class CardsGame
{
    private array $symbols = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
    private array $values = [14, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
    private CardCollection $deck;
    private CardCollection $handPlayer1;
    private CardCollection $handPlayer2;
    private CardCollectionWriterInterface $writer;

    // Es passa pel constructor una classe que implementa la interfície CardCollectionWriterInterface
    // Es creen els objectes que necessitem
    public function __construct(CardCollectionWriterInterface $writer)
    {
        $this->writer = $writer;
        $this->deck = new CardCollection();

        $this->handPlayer1 = new CardCollection();
        $this->handPlayer2 = new CardCollection();
    }

    public function setup()
    {
        foreach (Suit::cases() as $suit) {
            foreach ($this->symbols as $key => $symbol) {
                $this->deck->addCard(new Card($suit, $symbol, $this->values[$key]));
            }
        }
    }

    public function start(): void
    {
        $this->deck->shuffle();
        $numberOfCards = 5;
        $this->handPlayer1->add($this->deck->deal($numberOfCards));
        $this->handPlayer2->add($this->deck->deal($numberOfCards));
    }

    public function play(): array
    {
        $results = [];
        while (count($this->handPlayer1->getCards()) > 0) {
            $card1 = $this->handPlayer1->play();
            $card2 = $this->handPlayer2->play();

            $results[] = $card1->getValue() <=> $card2->getValue();
        }
        $result = array_sum($results);
        return $results;
    }

    public function render(): array
    {
        $deckOutput = $this->writer->write($this->deck);
        $cardsPlayer1 = $this->writer->write($this->handPlayer1);
        $cardsPlayer2 = $this->writer->write($this->handPlayer2);

        return ["deckOutput" => $deckOutput, "cardsPlayer1" => $cardsPlayer1,"cardsPlayer2" => $cardsPlayer2];
        //return compact("deckOutput", "cardsPlayer1", "cardsPlayer2");
    }
}