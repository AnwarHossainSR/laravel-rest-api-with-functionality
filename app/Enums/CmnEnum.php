<?php

namespace App\Enums;

abstract class CmnEnum
{
    public const ACTIVE = 1;
    public const INACTIVE = 0;
    public const ZERO = 0;
    public const ONE = 1;
    public const DEFAULT_LANG = 'en';
    public const API_SELECTED_AUTH = 'JWT';
    public const PASSWORD_MIN_LENGTH = 8;
    public const TOKEN_TYPE = 'Bearer';
    public const DEFAULT_CHAR_MIN = 2;
    public const DEFAULT_TITLE_CHAR_MAX = 255;
    public const DEFAULT_EMAIL_CHAR_MAX = 255;
    public const THUMBNAIL_SQUARE_SIZE = 100;
    public const CONTACT_NO_MIN = 9;
    public const CONTACT_NO_MAX = 15;
    public const ROLE_ADMIN = 'admin';
    public const ROLE_USER = 'user';
    public const ROLE_ADMIN_ID = 1;
    public const ROLE_USER_ID = 2;
    public const BJIT_WEBSITE_URL = 'https://bjitgroup.com';
    public const PERMISSIONS = [
        [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43],
        [21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43]
    ];

    public const FILE_PATH_PREFIX = 'storage';
    public const FILE_STORAGE_DISK = 'public';
    public const FILE_ORIGINAL_NAME_CHAR_LIMIT = 80;

    public const PRODUCT_CATEGORY_FILEABLE_TYPE = 'App\Models\Products\ProductCategory';
    public const PRODUCT_FILEABLE_TYPE = 'App\Models\Products\Product';

}
