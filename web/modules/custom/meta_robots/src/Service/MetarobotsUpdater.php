<?php
namespace Drupal\meta_robots\Service;

use Drupal\node\Entity\Node;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

class MetarobotsUpdater {

  protected $config;
  protected $entityTypeManager;

  public function __construct(ConfigFactoryInterface $config_factory, EntityTypeManagerInterface $entity_type_manager) {
    $this->config = $config_factory->get('meta_robots.settings');
    $this->entityTypeManager = $entity_type_manager;
  }

  public function applyMetarobotsToNodes(): int {
    $type = $this->config->get('content_type');
    $days = $this->config->get('days_old');
    $robots = $this->config->get('robots_value');

    $cutoff = \Drupal::time()->getRequestTime() - ($days * 86400);

    $storage = \Drupal::entityTypeManager()->getStorage('node');
    $nids = $storage->getQuery()
      ->accessCheck(FALSE)
      ->condition('type', $type)
      ->condition('status', 1)
      ->condition('created', $cutoff, '<')
      ->execute();

    $nodes = $storage->loadMultiple($nids);
    $count = 0;

    foreach ($nodes as $node) {
      if ($node->hasField('field_meta_tag')) {
        $metatag_field = $node->get('field_meta_tag');

        // Obtener las metatags existentes (o array vacío si no hay).
        $metatags = $metatag_field->getValue();
        $current = $metatags[0]['value'] ?? [];

        // Asegurar que $current sea un array.
        if (is_string($current)) {
          $current = json_decode($current, TRUE);
        }

        // Establecer o sobrescribir la etiqueta 'robots'.
        $current['robots'] = $robots;

        // Establecer el valor actualizado en el campo metatag.
        $metatag_field->setValue([
          [
            'value' => $current,
            'format' => NULL,
          ],
        ]);

        // Guardar nodo.
        $node->save();
        $count++;
      }
    }


    return $count;
  }
}
