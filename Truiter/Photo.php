<?php
class Photo extends Media {
    private string $altText;

    public function __construct($caption, $width, $height, $altText) {
        parent::__construct($caption, $width, $height);
        $this->altText = $altText;
    }

    public function getAltText(): string {
        return $this->altText;
    }

    public function setAltText(string $altText): void {
        $this->altText = $altText;
    }

    public function getSummary(): string {
        return $this->getCaption().', '.$this->getWidth().', '.$this->getHeight();
    }
}