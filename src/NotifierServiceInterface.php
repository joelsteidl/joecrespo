<?php

namespace Drupal\joecrespo;

/**
 * Interface NotifierServiceInterface.
 */
interface NotifierServiceInterface {

  /**
   * Sends an SMS.
   *
   * @param string $message
   *   The sms message.
   */
  public function send($message);

}
