<?php

namespace Drupal\joecrespo;

/**
 * Interface EmbellishServiceInterface.
 */
interface EmbellishServiceInterface {

  /**
   * Grab some embellished text.
   *
   * @return string
   *   A string of embellished text.
   */
  public function apply();
}
