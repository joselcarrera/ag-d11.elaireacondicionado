<?php
namespace Drupal\meta_robots\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\meta_robots\Service\MetarobotsUpdater;

class MetarobotsRunForm extends FormBase {

  public function getFormId(): string {
    return 'meta_robots_run_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form['description'] = [
      '#markup' => '<p>Haz clic para aplicar la etiqueta robots a los nodos seleccionados.</p>',
    ];

    $form['run'] = [
      '#type' => 'submit',
      '#value' => 'Aplicar cambios',
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state): void {
    /** @var \Drupal\meta_robots\Service\MetarobotsUpdater $updater */
    $updater = \Drupal::service('meta_robots.updater');
    $count = $updater->applyMetarobotsToNodes();
    $this->messenger()->addStatus("Se actualizaron $count nodos.");
  }
}
