<?php

namespace Gabrola\EmailNormalizer\Providers;

use Gabrola\EmailNormalizer\EmailNormalizer;
use Gabrola\EmailNormalizer\EmailRulesInterface;

/**
 * Class ZohoMail
 * @package Gabrola\EmailNormalizer\ProviderRules
 */
class ZohoMail implements EmailRulesInterface
{
    /**
     * @inheritDoc
     */
    public function getRules()
    {
        return [
            'zoho.com'      => [
                'rules' => EmailNormalizer::PLUS_TAG
            ],
        ];
    }
}