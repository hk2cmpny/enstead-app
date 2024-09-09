<?php
namespace App\Helpers;

trait RedirectTrait
{
  protected function getRedirectUrl(): string
  {
      return static::getResource()::getUrl('index');
  }
}
