<?php
namespace ElliotSawyer\Matomo;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\ORM\DataExtension;

class MatomoMemberExtension extends DataExtension {
    private static $db = [
        'DisableMatomo' => 'Boolean'
    ];
    public function updateCMSFields(\SilverStripe\Forms\FieldList $fields)
    {
        $fields->insertAfter(
            'Groups',
            CheckboxField::create(
                'DisableMatomo',
                'Disable Matomo Analytics tracking'
            )->setDescription(
                'Allow the member to opt-out of Matomo Analytics tracking'
            )
        );
    }
}
