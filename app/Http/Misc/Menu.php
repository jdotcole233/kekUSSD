<?php


namespace App\Http\Misc;


class Menu
{
    protected string $menu = '';

    public function singleLine (string $menu_content): self
    {
        $this->menu .= $menu_content;
        return  $this;
    }

    public function singleLineWithBreak(string $menu_content) : self
    {
        $this->menu .= $menu_content . '\n';
       return  $this;
    }

    public function multipleLines (array $menu_contents, string $type): ?self
    {
        if (count($menu_contents) <= 0 ) return null;
        foreach ($menu_contents as $key => $menu_content) {
            $this->menu .= $key + 1 . "$type" . $menu_content.'\n';
        }
        return $this;
    }

    public function newline(int $number = 1)
    {
        $this->menu .= str_repeat('\n', $number);
        return  $this;
    }

    public function __toString(): string
    {
       return $this->menu;
    }
}
