<?php
return array(
    // set your paypal credential
    'client_id' => 'ATnwBDO-ugyoIiymlX2Ajdp-THEhH9-Y5iLP-mhim0In4jHI-9FKRFSrFKOjwKKdHzrlaaJM_lFsvsdi',
    'secret' => 'EIOK8BnYgUQWbodXkJjcWtR7g_sjD7qzZP2C55PWXddDaIfi3YokdUD2jwOLphSfWXBAI18_q3DP2Dil',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
