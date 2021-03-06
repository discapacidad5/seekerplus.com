<?php

/**
 * JCH Optimize - Joomla! plugin to aggregate and minify external resources for
 * optmized downloads
 *
 * @author Samuel Marshall <sdmarshall73@gmail.com>
 * @copyright Copyright (c) 2014 Samuel Marshall
 * @license GNU/GPLv3, See LICENSE file
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * If LICENSE file missing, see <http://www.gnu.org/licenses/>.
 */
defined('_JCH_EXEC') or die('Restricted access');

interface JchInterfacePaths
{
                
        /**
         * 
         */
        public static function assetPath();
                
        /**
         * 
         */
        public static function spriteDir($url = FALSE);
                
        /**
         * 
         * @param type $url
         */
        public static function absolutePath($url);
                
        /**
         * 
         */
        public static function rewriteBase();
        
        /**
         * 
         */
        public static function path2Url($sPath);
        
        /**
         * 
         * @param type $function
         */
        public static function ajaxUrl($function);
        
        /**
         * 
         */
        public static function rootPath();
}