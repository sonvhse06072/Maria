<?php

/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\NdRhythmPrevNext.
 */

namespace Drupal\rhythm_cms\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Drupal\Core\Block\BlockBase gives us a very useful set of basic functionality
 * for this configurable block. We can just fill in a few of the blanks with
 * defaultConfiguration(), blockForm(), blockSubmit(), and build().
 *
 * @Block(
 *   id = "nd_rhythm_prev_next",
 *   admin_label = @Translation("Rhythm: Project Next Prev")
 * )
 */
class NdRhythmPrevNext extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'all_works_link' => 'portfolio-boxed',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['all_works_link'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('All Works Link'),
      '#description' => $this->t('This text will appear in the example block.'),
      '#default_value' => $this->configuration['all_works_link'],
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['all_works_link']
      = $form_state->getValue('all_works_link');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    $node = \Drupal::routeMatch()->getParameter('node');
    $query = \Drupal::database()->select('node_revision', 'nr');
    $query->leftJoin('node', 'n', 'n.nid = nr.nid');
    $query->leftJoin('node_field_revision', 'nfr', 'nfr.vid = nr.vid');    
    $nids = $query->condition('n.type', $node->getType())->fields('n', array('nid'))->condition('nfr.status', 1)->orderBy('nr.revision_timestamp', 'DESC')->execute()->fetchAll();

    $nid = $node->id();
    $offset = 0;
    foreach($nids as $i => $entity) {
      $offset = $entity->nid == $nid ? $i : $offset; 
    }
    $next = !$offset ? $nids[count($nids) - 1] : $nids[$offset - 1];
    $prev = ($offset + 1) == count($nids) ? $nids[0] : $nids[$offset + 1];

    $next = $next->nid ? Url::fromRoute('entity.node.canonical', array('node' => $next->nid)) : '#';
    $prev = $prev->nid ? Url::fromRoute('entity.node.canonical', array('node' => $prev->nid)) : '#';
    $all_works = base_path() . $this->configuration['all_works_link'];

    return array(
      '#theme' => 'rhythm_project_next_prev',
      '#next' => $next,
      '#prev' => $prev,
      '#all_works' => $all_works
    );
  }

}
