<?php

namespace Drupal\mbgna_plant\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the plant entity edit forms.
 */
class PlantForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);

    $entity = $this->getEntity();

    $logger_arguments = [
      '%label' => $entity->label(),
      'link' => $entity->toLink($this->t('View'))->toString(),
    ];

    switch ($result) {
      case SAVED_NEW:
        $this->messenger()->addStatus($this->t('Plant created.'));
        $this->logger('mbgna_plant')->notice('Created new plant %label', $logger_arguments);
        break;

      case SAVED_UPDATED:
        $this->messenger()->addStatus($this->t('Plant updated.'));
        $this->logger('mbgna_plant')->notice('Updated plant %label.', $logger_arguments);
        break;
    }

    $form_state->setRedirect('entity.plant.canonical', ['plant' => $entity->id()]);

    return $result;
  }

}
