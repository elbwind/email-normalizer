<?php

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class Mailbox
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class Mailbox implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'mailbox.org'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
        ];
    }
}