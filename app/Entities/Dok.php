<?php namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Dok extends Entity
{
  public function setDok($file)
  {
      $fileName = $file->getRandomName();
      $writePath = './uploads';
      $file->move($writePath, $fileName);
      $this->attributes['dok'] =$fileName;
      return $this;
  }
}