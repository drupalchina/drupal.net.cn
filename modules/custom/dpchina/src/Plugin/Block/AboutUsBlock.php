<?php

namespace Drupal\dpchina\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides About us block.
 *
 * @Block(
 *   id = "dpchina_about_us",
 *   admin_label = @Translation("dpchina: about us")
 * )
 */
class AboutUsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'aboutusblock',
    );
  }

}
