<?php

namespace Drupal\dpchina\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides Front top block.
 *
 * @Block(
 *   id = "dpchina_front_top",
 *   admin_label = @Translation("dpchina: front top")
 * )
 */
class FrontTopBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'fronttopblock',
      // '#variables' => array(),
      '#title' => 'Drupal中国社群是一个公益性组织，我们致力于Drupal在中国的应用与推广',
      // '#description' => 'Drupal中国社群是一个公益性组织，我们致力于Drupal在中国的应用与推广！',
      '#img' => '/' . drupal_get_path('module', 'dpchina') . '/images/fronttopblock.png',
    );
  }

}
