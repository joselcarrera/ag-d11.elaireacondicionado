<?php
namespace Drupal\meta_robots\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class MetarobotsSettingsForm extends ConfigFormBase {

  protected function getEditableConfigNames(): array {
    return ['meta_robots.settings'];
  }

  public function getFormId(): string {
    return 'meta_robots_settings_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config('meta_robots.settings');

    $content_types = node_type_get_names();
    $form['content_type'] = [
      '#type' => 'select',
      '#title' => 'Tipo de contenido',
      '#options' => $content_types,
      '#default_value' => $config->get('content_type'),
    ];

    $form['days_old'] = [
      '#type' => 'number',
      '#title' => 'Días desde la publicación',
      '#default_value' => $config->get('days_old') ?? 365,
      '#min' => 1,
    ];

    $form['robots_value'] = [
      '#type' => 'textfield',
      '#title' => 'Valor de la etiqueta robots',
      '#default_value' => $config->get('robots_value') ?? 'noindex, nofollow',
    ];

    return parent::buildForm($form, $form_state) + [
      'actions' => ['#type' => 'actions', 'submit' => ['#type' => 'submit', '#value' => 'Guardar']],
    ];
  }

  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->config('meta_robots.settings')
      ->set('content_type', $form_state->getValue('content_type'))
      ->set('days_old', $form_state->getValue('days_old'))
      ->set('robots_value', $form_state->getValue('robots_value'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
