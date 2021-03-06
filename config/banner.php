<?php
    return [
        /* -------------------------------------------------------------------------------------------
        | Set application language
        | --------------------------------------------------------------------------------------------
        |
        | You can find the available languages in the "resources/lang" folder.
        |
        | Default languages:
        |   en-US
        |   tr-TR
        |
        */

        'language' => 'en-US',

        /* -------------------------------------------------------------------------------------------
        | Set application template
        | --------------------------------------------------------------------------------------------
        |
        | You can find the available templates in the "resources/template" folder.
        | Folder name is template name
        |
        | Default templates:
        |   dark
        |   light
        |
        */

        'template' => 'dark',

        /* -------------------------------------------------------------------------------------------
        | Set Teamspeak admin server group id
        | --------------------------------------------------------------------------------------------
        */

        'admin_server_group_id' => '0',

        /* -------------------------------------------------------------------------------------------
        | Set Teamspeak support server group id
        | --------------------------------------------------------------------------------------------
        */

        'support_server_group_id' => '0',

        /* -------------------------------------------------------------------------------------------
        | Set cache
        | --------------------------------------------------------------------------------------------
        |
        | Cache is important for the prevent flood
        |
        */

        'cache' => true,

        /* -------------------------------------------------------------------------------------------
        | Set cache timeout (second)
        | --------------------------------------------------------------------------------------------
        */

        'cache_ttl' => 60,
    ];