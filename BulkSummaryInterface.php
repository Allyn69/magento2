<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Bulk;

/**
 * Interface BulkSummaryInterface
 */
interface BulkSummaryInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const BULK_ID = 'uuid';
    const DESCRIPTION = 'description';
    const START_TIME = 'start_time';
    const USER_ID = 'user_id';
    const ENTITY_TYPE = 'entity_type';
    /**#@-*/

    /**#@+
     * Bulk statuses constants
     */
    const NOT_STARTED = 0;
    const IN_PROGRESS = 1;
    const FINISHED_SUCCESSFULLY = 2;
    const FINISHED_WITH_FAILURE = 3;
    /**#@-*/

    /**
     * Get bulk uuid
     *
     * @return string
     */
    public function getBulkId();

    /**
     * Set bulk uuid
     *
     * @param string $bulkUuid
     * @return $this
     */
    public function setBulkId($bulkUuid);

    /**
     * Get bulk description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set bulk description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * Get bulk entity type
     *
     * @return string
     */
    public function getEntityType();

    /**
     * Set bulk entity type
     *
     * @param string $entityType
     * @return $this
     */
    public function setEntityType($entityType);

    /**
     * Get bulk scheduled time
     *
     * @return string
     */
    public function getStartTime();

    /**
     * Set bulk scheduled time
     *
     * @param string $timestamp
     * @return $this
     */
    public function setStartTime($timestamp);

    /**
     * Get user id
     *
     * @return int
     */
    public function getUserId();

    /**
     * Set user id
     *
     * @param int $userId
     * @return $this
     */
    public function setUserId($userId);
}
