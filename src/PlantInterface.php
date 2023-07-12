<?php

namespace Drupal\mbgna_plant;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a plant entity type.
 */
interface PlantInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
