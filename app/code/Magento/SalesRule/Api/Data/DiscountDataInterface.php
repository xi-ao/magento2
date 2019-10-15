<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SalesRule\Api\Data;

interface DiscountDataInterface
{
    /**
     * Get Amount
     *
     * @return float
     */
    public function getAmount(): float;

    /**
     * Set Amount
     *
     * @param float $amount
     * @return $this
     */
    public function setAmount(float $amount);

    /**
     * Get Base Amount
     *
     * @return float
     */
    public function getBaseAmount(): float;

    /**
     * Set Base Amount
     *
     * @param float $baseAmount
     * @return $this
     */
    public function setBaseAmount(float $baseAmount);

    /**
     * Get Original Amount
     *
     * @return float
     */
    public function getOriginalAmount(): float;

    /**
     * Set original Amount
     *
     * @param float $originalAmount
     * @return $this
     */
    public function setOriginalAmount(float $originalAmount);

    /**
     * Get Base Original Amount
     *
     * @return float
     */
    public function getBaseOriginalAmount(): float;

    /**
     * Set base original Amount
     *
     * @param float $baseOriginalAmount
     * @return $this
     */
    public function setBaseOriginalAmount(float $baseOriginalAmount);
}
