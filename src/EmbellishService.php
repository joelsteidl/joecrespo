<?php

namespace Drupal\joecrespo;

/**
 * Class EmbellishService.
 */
class EmbellishService implements EmbellishServiceInterface {

  /**
   * {@inheritdoc}
   */
  public function apply() {
    $client = \Drupal::httpClient();
    $params = [
      'query' => [
        'rel_jjb' => 'sunset',
      ]
    ];
    $request = $client->get('https://api.datamuse.com/words', $params);
    $response = $request->getBody()->getContents();
    $words = json_decode($response);
    $rand = array_rand($words);
    return 'Joe Crespo is ' . $words[$rand]->word;
  }

}
