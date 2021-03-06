<?php

namespace Drupal\ledger_account;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\ledger\LedgerInterface;

/**
 * Provides an interface for defining Ledger Account entities.
 *
 * @ingroup ledger_account
 */
interface LedgerAccountInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Ledger Account type.
   *
   * @return string
   *   The Ledger Account type.
   */
  public function getType();

  /**
   * Gets the Ledger Account name.
   *
   * @return string
   *   Name of the Ledger Account.
   */
  public function getName();

  /**
   * Sets the Ledger Account name.
   *
   * @param string $name
   *   The Ledger Account name.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   The called Ledger Account entity.
   */
  public function setName($name);

  /**
   * Gets the Ledger Account creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Ledger Account.
   */
  public function getCreatedTime();

  /**
   * Sets the Ledger Account creation timestamp.
   *
   * @param int $timestamp
   *   The Ledger Account creation timestamp.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   The called Ledger Account entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the parent account.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   Ledger Account entity.
   */
  public function getParent();

  /**
   * Sets the parent account.
   *
   * @param \Drupal\ledger_account\LedgerAccountInterface $account
   *   A Ledger Account entity.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   The called Ledger Account entity.
   */
  public function setParent(LedgerAccountInterface $account);

  /**
   * Gets the ID of the parent account..
   *
   * @return int
   *   Ledger Account entity ID.
   */
  public function getParentId();

  /**
   * Sets the ID of the parent account.
   *
   * @param int $id
   *   Ledger Account entity ID.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   The called Ledger Account entity.
   */
  public function setParentId($id);

  /**
   * Gets the ledger entity that the account is associated with.
   *
   * @return \Drupal\ledger\LedgerInterface
   *   Ledger entity.
   */
  public function getLedger();

  /**
   * Sets the ledger entity that the account is associated with.
   *
   * @param LedgerInterface $ledger
   *   A Ledger object.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   The called Ledger Account entity.
   */
  public function setLedger(LedgerInterface $ledger);

  /**
   * Gets the ID of the ledger the account is associated with.
   *
   * @return int
   *   Ledger entity ID.
   */
  public function getLedgerId();

  /**
   * Sets the ID of the ledger the account is associated with.
   *
   * @param int $id
   *   Ledger entity ID.
   *
   * @return \Drupal\ledger_account\LedgerAccountInterface
   *   The called Ledger Account entity.
   */
  public function setLedgerId($id);

}
