<?php

namespace Drupal\joecrespo;

use Drupal\key\KeyRepositoryInterface;
use Twilio\Rest\Client;

/**
 * Class NotifierService.
 */
class NotifierService implements NotifierServiceInterface {

  /**
   * Drupal\key\KeyRepositoryInterface definition.
   *
   * @var \Drupal\key\KeyRepositoryInterface
   */
  protected $key;

  /**
   * Constructs a new NotifierService object.
   */
  public function __construct(KeyRepositoryInterface $key_repository) {
    $this->key = $key_repository;
  }

  /**
   * {@inheritdoc}
   */
  public function send($message) {
    $twilioSid = $this->key->getKey('twilio_sid')->getKeyValue();
    $authToken = $this->key->getKey('twilio_token')->getKeyValue();
    $twilioPhoneFrom = $this->key->getKey('twilio_phone_from')->getKeyValue();
    $twilioPhoneTo = $this->key->getKey('twilio_phone_to')->getKeyValue();

    $client = new Client($twilioSid, $authToken);
    $client->messages->create(
        $twilioPhoneTo,
        [
          'from' => $twilioPhoneFrom,
          'body' => $message,
        ]
    );
  }
}
