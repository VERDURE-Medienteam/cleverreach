<?php

declare(strict_types=1);

namespace Supseven\Cleverreach\Service;

use TYPO3\CMS\Core\SingletonInterface;

/**
 * This file is part of the "cleverreach" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Class ConfigurationService
 */
class ConfigurationService implements SingletonInterface
{
    public const UNSCRIBE_DOUBLEOPTOUT = 'doubleoptout';
    public const UNSCRIBE_DELETE = 'delete';
    public const UNSCRIBE_INACTIVE = 'inactive';

    public function getConfiguration()
    {
        return $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_cleverreach.']['settings.'];
    }

    /**
     * @return string
     */
    public function getRestUrl(): string
    {
        return $this->getConfiguration()['restUrl'];
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return (string)$this->getConfiguration()['clientId'];
    }

    /**
     * @return string
     */
    public function getLoginName(): string
    {
        return (string)$this->getConfiguration()['login'];
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->getConfiguration()['password'];
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return (int)$this->getConfiguration()['groupId'];
    }

    /**
     * @return int
     */
    public function getFormId(): int
    {
        return (int)$this->getConfiguration()['formId'];
    }

    /**
     * @return string
     */
    public function getUnsubscribeMethod(): string
    {
        return $this->getConfiguration()['unsubscribemethod'];
    }
}
