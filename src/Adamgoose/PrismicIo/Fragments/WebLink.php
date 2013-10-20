<?php namespace Adamgoose\PrismicIo\Fragments;

use stdClass;
use Adamgoose\PrismicIo\Api;

class WebLink implements FragmentInterface {

  public $type;
  public $value;

  /**
   * Create new WebLink Fragment
   *
   * @param  stdClass $fragment
   * @return void
   */
  public function __construct(stdClass $fragment, Api $api)
  {
    $this->type = $fragment->type;
    $this->value = $fragment->value;
  }

  /**
   * Parse the fragment to a string
   *
   * @return string
   */
  public function toString()
  {
    return $this->value->url;
  }

  /**
   * Parse the fragment to HTML
   *
   * @return string
   */
  public function toHtml()
  {
    return $this->toString();
  }

  /**
   * Handle dynamic string typecasting
   *
   * @return string
   */
  public function __toString()
  {
    return $this->toString();
  }
}