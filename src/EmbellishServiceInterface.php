<?php

namespace Drupal\joecrespo;

/**
 * Interface EmbellishServiceInterface.
 */
interface EmbellishServiceInterface {

  /**
   * Grab some embellished text.
   *
   * @param string $noun
   *   A noun that can be described.
   *
   * @return string
   *   A string of embellished text.
   */
  public function describe($noun);
}
