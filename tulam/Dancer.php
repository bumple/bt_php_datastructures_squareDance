<?php
class Dancer
{
    public string $name;
    public string $gentle;
    public function __construct($name,$gentle)
    {
        $this->name = $name;
        $this->gentle = $gentle;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
