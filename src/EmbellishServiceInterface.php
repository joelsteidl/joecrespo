<?php

namespace Drupal\joecrespo;

/**
 * Interface EmbellishServiceInterface.
 */
interface EmbellishServiceInterface {

  /**
   * Grab some embellished text.
   *
   * @param string $thing
   *   A thing that can be described with adjectives.
   *
   * @return string
   *   A string of embellished text.
   */
  public function describe($thing);
}
