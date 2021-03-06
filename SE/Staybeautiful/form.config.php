<?php namespace JF;
/**

Copyright 2016 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-f9f826
Date:    2016-11-05 13:54:37
Version: v1.0-rc25
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-f9f826",
    "email": {
        "to": "",
        "cc": "",
        "bcc": "",
        "subject": "",
        "template": ""
    },
    "admin": {
        "users": "admin:bf2b2",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "Your form has been sent. We should get back to you soon.\nThank You!\n",
        "seconds": "25"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "pink"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Your Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "maxlength": {
                        "enabled": true,
                        "val": "20",
                        "msg": "Please enter no more than 20 characters."
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "cid": "c2"
        },
        {
            "label": "Category",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": true
                    },
                    {
                        "label": "Product Quality",
                        "checked": false
                    },
                    {
                        "label": "Tracking Details",
                        "checked": false
                    },
                    {
                        "label": "Return Product",
                        "checked": false
                    },
                    {
                        "label": "Other Support",
                        "value": null,
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": true
            },
            "cid": "c33"
        },
        {
            "label": "Your Request",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "maxlength": {
                        "enabled": true,
                        "val": "1000",
                        "msg": "Please enter no more than 1000 characters."
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-edit"
                }
            },
            "cid": "c3"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "cid": "c100"
        }
    ],
    "autoResponse": {
        "template": "Dear {sender.fullname},\n\nThank you for filling out the form. We will reach out to you within 24hours. Here is the copy of your data:\n{dataTable}\n\nHave a great day!\n\nBest Regards,\nStayBeautiful.Com\n\n\nReference ID: {AutoID}\nYour IP: {IP}\nDate: {Date}\nTime: {Time}\n",
        "subject": "Thank you for contacting us"
    }
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class