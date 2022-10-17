<?php
class Video extends Media {
    private int $duration;

    public function __construct($caption, $width, $height, $duration) {
        parent::__construct($caption, $width, $height);
        $this->duration = $duration;
    }

    public function getSummary(): string {
        return $this->getCaption().', '.$this->getWidth().', '.$this->getHeight();
    }

    public function getDuration(): int {
        return $this->duration;
    }

    public function setDuration(int $duration): void {
        $this->duration = $duration;
    }
}