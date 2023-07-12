<?php

namespace Drupal\mbgna_plant\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Plant type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "plant_type",
 *   label = @Translation("Plant type"),
 *   label_collection = @Translation("Plant types"),
 *   label_singular = @Translation("plant type"),
 *   label_plural = @Translation("plants types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count plants type",
 *     plural = "@count plants types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\mbgna_plant\Form\PlantTypeForm",
 *       "edit" = "Drupal\mbgna_plant\Form\PlantTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\mbgna_plant\PlantTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer plant types",
 *   bundle_of = "plant",
 *   config_prefix = "plant_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/plant_types/add",
 *     "edit-form" = "/admin/structure/plant_types/manage/{plant_type}",
 *     "delete-form" = "/admin/structure/plant_types/manage/{plant_type}/delete",
 *     "collection" = "/admin/structure/plant_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class PlantType extends ConfigEntityBundleBase {

  /**
   * The machine name of this plant type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the plant type.
   *
   * @var string
   */
  protected $label;

}
