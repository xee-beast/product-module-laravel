<?php

//Groups: 'name: <name as slug>|label: <label>'
//Permissions: 'guard: <guard name: web|api>|label: <label>|description: <description>'

return [
    //============ SETTINGS ==================
    'name:settings|label:Settings' => [
        'name:security|label:Security' => [
                'name:users|label:Users' => [
                    'name:staff|label:Staff' => [
                        'guard:web|name:view-staff-users|label:View staff users|description:Can view users of type staff',
                        'guard:web|name:create-staff-users|label:Create staff users|description:Can create users of type staff',
                        'guard:web|name:edit-staff-users|label:Update staff users|description:Can update users of type staff',
                    ],
                    'name:agent|label:Agents' => [
                        'guard:web|name:view-agent-users|label:View agent users|description:Can view users of type agent',
                        'guard:web|name:create-agent-users|label:Create agent users|description:Can create users of type agent',
                        'guard:web|name:edit-agent-users|label:Update agent users|description:Can update users of type agent',
                    ],
                    'name:student|label:Students' => [
                        'guard:web|name:view-student-users|label:View student users|description:Can view users of type student',
                        'guard:web|name:create-student-users|label:Create student users|description:Can create users of type student',
                        'guard:web|name:edit-student-users|label:Update student users|description:Can update users of type student',
                    ],
                ],
                'name:roles|label:Roles' => [
                    'guard:web|name:view-roles|label:View roles|description:Can view the roles details',
                    'guard:web|name:create-roles|label:Create roles|description:Can create roles',
                    'guard:web|name:edit-roles|label:Update and delete roles|description:Can update and delete roles',
                ],
            'name:agents|label:Agent Accounts' => [
                'guard:web|name:view-agents|label:View agent accounts|description:Can view agents',
                'guard:web|name:create-agents|label:Create agent accounts|description:Can create agents',
                'guard:web|name:edit-agents|label:Update agents accounts|description:Can update agents',
            ],
        ],
        'name:geographic|label:Geographic' => [
            'name:countries|label:Countries' => [
                'guard:web|name:view-countries|label:View Countries|description:Can view countries',
                'guard:web|name:create-countries|label:Create Countries|description:Can create countries',
                'guard:web|name:edit-countries|label:Update and delete Countries|description:Can update and delete countries',
            ],
            'name:regions|label:Regions' => [
                'guard:web|name:view-regions|label:View Regions|description:Can view regions',
                'guard:web|name:create-regions|label:Create Regions|description:Can create regions',
                'guard:web|name:edit-regions|label:Update and delete Regions|description:Can update and delete regions',
            ],
            'name:locations|label:Locations' => [
                'guard:web|name:view-locations|label:View Locations|description:Can view locations',
                'guard:web|name:create-locations|label:Create Locations|description:Can create locations',
                'guard:web|name:edit-locations|label:Update and Delete Locations|description:Can update and delete locations',
            ],
            'name:visas|label:Visas' => [
                'guard:web|name:view-visas|label:View Visas|description:Can view visas',
                'guard:web|name:create-visas|label:Create Visas|description:Can create visas',
                'guard:web|name:edit-visas|label:Update Visas|description:Can update visas',
            ],
            'name:faculties|label:Faculties' => [
                'guard:web|name:view-faculties|label:View Faculties|description:Can view faculties',
                'guard:web|name:create-faculties|label:Create Faculties|description:Can create faculties',
                'guard:web|name:edit-faculties|label:Update and delete Faculties|description:Can update and delete faculties',
            ],
            'name:languages|label:Languages' => [
                'guard:web|name:view-languages|label:View Languages|description:Can view languages',
                'guard:web|name:create-languages|label:Create Languages|description:Can create languages',
                'guard:web|name:edit-languages|label:Update and delete Languages|description:Can update and delete languages',
            ],
        ],

        'name:dates|label:Dates' => [
            'name:calendars|label:Calendars' => [
                'guard:web|name:view-calendars|label:View Calendars|description:Can view calendars',
                'guard:web|name:create-calendars|label:Create Calendars|description:Can create calendars',
                'guard:web|name:edit-calendars|label:Update and delete Calendars|description:Can update and delete calendars',
            ],
        ],

        'name:special-offers|label:Special Offers' => [
            'name:categories|label:Categories' => [
                'guard:web|name:view-special-offer-categories|label:View special offer categories|description:Can view special offer categories',
                'guard:web|name:create-special-offer-categories|label:Create special offer categories|description:Can create special offer categories',
                'guard:web|name:edit-special-offer-categories|label:Update and delete special offer categories|description:Can update and delete special offer categories',
            ],
            'name:offers|label:Offers' => [
                'guard:web|name:view-special-offers|label:View special offers|description:Can view special offers',
                'guard:web|name:create-special-offers|label:Create special offers|description:Can create special offers',
                'guard:web|name:edit-special-offers|label:Update and delete special offers|description:Can update and delete special offers',
            ]
        ],
        'name:letter-of-offer|label:Letter of Offer' => [
            'name:sections|label:Sections' => [
                'guard:web|name:view-letter-of-offer-sections|label:View letter of offer sections|description:Can view letter of offer section',
                'guard:web|name:create-letter-of-offer-sections|label:Create letter of offer sections|description:Can create letter of offer section',
                'guard:web|name:edit-letter-of-offer-sections|label:Update and delete letter of offer sections|description:Can update and delete letter of offer section',
            ],
            'name:templates|label:Templates' => [
                'guard:web|name:view-letter-of-offer-templates|label:View letter of offer templates|description:Can view letter of offer template',
                'guard:web|name:create-letter-of-offer-templates|label:Create letter of offer templates|description:Can create letter of offer template',
                'guard:web|name:edit-letter-of-offer-templates|label:Update and delete letter of offer templates|description:Can update and delete letter of offer template',
            ],
        ],

        'name:fees|label:Fees' => [
            'name:insurance|label:OSHC' => [
                'guard:web|name:edit-insurance|label:Update OSHC|description:Can update OSHC',
            ],
            'name:programs|label:Programs' => [
                'name:programs-pricebooks|label:Price Books' => [
                    'guard:web|name:view-programs-pricebooks|label:View programs price books|description:Can view programs price books.',
                    'guard:web|name:create-programs-pricebooks|label:Create programs price books|description:Can create programs price books.',
                    'guard:web|name:edit-programs-pricebooks|label:Edit and delete programs price books|description:Can edit and delete programs price books.',
                ],
                'name:programs-fee-services|label:Services' => [
                    'guard:web|name:view-programs-fee-services|label:View program services|description:Can view program services.',
                    'guard:web|name:create-programs-fee-services|label:Create program services|description:Can create program services.',
                    'guard:web|name:edit-programs-fee-services|label:Edit and delete program services|description:Can edit and delete program services.',
                ]
            ],
            'name:accommodation|label:Accommodation' => [
                'name:accommodations-pricebooks|label:Price Books' => [
                    'guard:web|name:view-accommodation-pricebooks|label:View accommodation price books|description:Can view accommodations price books.',
                    'guard:web|name:create-accommodation-pricebooks|label:Create accommodation price books|description:Can create accommodations price books.',
                    'guard:web|name:edit-accommodation-pricebooks|label:Edit and delete accommodation price books|description:Can edit and delete accommodations price books.',
                ],
                'name:accommodations-services|label:Fee Services' => [
                    'guard:web|name:view-accommodation-fee-services|label:View accommodation services|description:Can view accommodation services.',
                    'guard:web|name:create-accommodation-fee-services|label:Create accommodation services|description:Can create accommodation services.',
                    'guard:web|name:edit-accommodation-fee-services|label:Edit and delete accommodation services|description:Can edit and delete accommodation services.',
                ],
                'name:accommodations-addons|label:Accommodation Add-ons' => [
                    'guard:web|name:view-accommodation-fee-addons|label:View accommodation addons|description:Can view accommodation addons.',
                    'guard:web|name:create-accommodation-fee-addons|label:Create accommodation addons|description:Can create accommodation addons.',
                    'guard:web|name:edit-accommodation-fee-addons|label:Edit and delete accommodation addons|description:Can edit and delete accommodation addons.',
                ]
            ],
            'name:transportation|label:Transportation' => [
                'name:transportation-addons|label:Transportation Add-ons' => [
                    'guard:web|name:view-transportation-fee-addons|label:View transportation addons|description:Can view transportation addons.',
                    'guard:web|name:create-transportation-fee-addons|label:Create transportation addons|description:Can create transportation addons.',
                    'guard:web|name:edit-transportation-fee-addons|label:Edit and delete transportation addons|description:Can edit and delete transportation addons.',
                ],
                'name:transportation-services|label:Transportation Services' => [
                    'guard:web|name:view-transportation-fee-services|label:View transportation services|description:Can view transportation services.',
                    'guard:web|name:create-transportation-fee-services|label:Create transportation services|description:Can create transportation services.',
                    'guard:web|name:edit-transportation-fee-services|label:Edit and delete transportation services|description:Can edit and delete transportation services.',
                ],
            ],
            'name:payment-methods|label:Payment Methods' => [
                'guard:web|name:view-payment-methods|label:View payment methods|description:Can view payment methods.',
                'guard:web|name:create-payment-methods|label:Create payment methods|description:Can create payment methods.',
                'guard:web|name:edit-payment-methods|label:Edit and delete payment methods|description:Can edit and delete payment methods.',
            ]
        ],
        'name:products|label:Products' => [
            'name:programs|label:Programs' => [
                'guard:web|name:view-programs|label:View Program|description:Can view programs',
                'guard:web|name:create-programs|label:Create Program|description:Can create programs',
                'guard:web|name:edit-programs|label:Update and delete Program|description:Can update and delete programs',
            ],
            'name:accommodations|label:Accommodation' => [
                'name:accommodation-category|label:Accommodation Category' => [
                    'guard:web|name:view-accommodation-categories|label:View accommodation category|description:Can view accommodation categories',
                    'guard:web|name:create-accommodation-categories|label:Create accommodation category|description:Can create accommodation categories',
                    'guard:web|name:edit-accommodation-categories|label:Update and delete accommodation category|description:Can update and delete accommodation categories',
                ],
                'guard:web|name:view-accommodation|label:View Accommodation|description:Can view accommodation',
                'guard:web|name:create-accommodation|label:Create Accommodation|description:Can create accommodation',
                'guard:web|name:edit-accommodation|label:Update and delete Accommodation|description:Can update and delete accommodation',
            ],
            'name:transportation|label:Transportation' => [
                'guard:web|name:view-transportation|label:View transportation|description:Can view transportation',
                'guard:web|name:create-transportation|label:Create transportation|description:Can create transportation',
                'guard:web|name:edit-transportation|label:Update and delete transportation|description:Can update and delete transportation',
            ]
            ,
            'name:packaged-programs|label:Packaged Programs' => [
                'guard:web|name:view-packaged-programs|label:View packaged programs|description:Can view packaged programs',
                'guard:web|name:create-packaged-programs|label:Create packaged programs|description:Can create packaged programs',
                'guard:web|name:edit-packaged-programs|label:Update and delete packaged programs|description:Can update and delete packaged programs',
            ]
        ],
        'name:integrations|label:Integrations' => [
            'name:ebecas|label:eBECAS' => [
                'guard:web|name:edit-ebecas-integration|label:Update eBECAS Integration|description:Can update the eBECAS Integration details.',
            ],
        ],
        'name:applications-form|label:Applications Form' => [
            'name:applications|label:Applications' => [
                'guard:web|name:view-applications|label:View applications|description:Can view applications',
                'guard:web|name:create-applications|label:Create applications|description:Can create applications',
                'guard:web|name:edit-applications|label:Update and delete applications|description:Can update and delete applications',
                'guard:web|name:edit-application-properties|label:update application properties|description:Can update application properties',
            ],
        ],
        'name:general-settings|label:General Settings' => [
            'guard:web|name:can-edit-general-settings|label:Can edit general settings|description:Can edit general settings',
        ],
        'name:logs|label:Logs' => [
            'guard:web|name:view-logs|label:View Logs|description:Can view logs',
        ],
    ],
    //=====================================
];
