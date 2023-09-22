<?php

class Food
{
    private string $name;
    private string $price;
    private string $description;
    private string $calories;

    /**
     * @param string $name
     * @param string $price
     * @param string $description
     * @param string $calories
     */
    public function __construct(string $name = "", string $price = "", string $description = "", string $calories = "")
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->calories = $calories;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCalories(): string
    {
        return $this->calories;
    }

    /**
     * @param string $calories
     */
    public function setCalories(string $calories): void
    {
        $this->calories = $calories;
    }



}