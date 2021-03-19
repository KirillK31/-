<?php
namespace KirillK;

class KirillExeption extends \RuntimeException
{
   public function __construct($message = "")
    {
        parent::__construct($message);
    }
}