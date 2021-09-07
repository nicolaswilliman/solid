<?php

class Post
{
    public function __construct(
        private string $title,
        private string $text,
    )
    {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    private function getContent(): array
    {
        return [
            'title' => $this->title,
            'text' => $this->text,
        ];
    }

    public function formatJson(): string
    {
        return json_encode($this->getContent());
    }
}

$post = new Post('Titulo', 'Texto');
echo "{$post->formatJson()}\n";
