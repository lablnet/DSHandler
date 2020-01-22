<?php

/**
 * Data Structure.
 *
 *  Manuipulate data structures in php.
 *
 * @author   Muhammad Umer Farooq <mumerfarooqlablnet01@gmail.com>
 * @link https://lablnet.github.io/profile/
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @license MIT
 */

namespace Lablnet;

class DSHandler {

    /**
     * Sort the array by col.
     *
     * @param array    $arr Array to be parsed.
     * @param string   $col Col to be sort
     * @param constant $dir ASC or DESC
     *
     * @author Muhammad Umer Farooq
    */
    public function _sort(&$arr, $col, $dir = SORT_ASC) {
        $sort_col = array();
        foreach ($arr as $key=> $row) {
            $sort_col[$key] = $row[$col];
        }

        array_multisort($sort_col, $dir, $arr);
    }
    
    /**
     * Remove duplicates values from array by key.
     *
     * @param array    $array Array to be parsed.
     * @param string   $key   Key of array
     *
     * @author Muhammad Umer Farooq
    */
    public function _unique($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
       
        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    /**
     * Remove array by key:value pair.
     *
     * @param array  $array Array to be parsed.
     * @param string $key   Key of to be work on.
     * @param string $value Value to considered
     *
     * @author Muhammad Umer Farooq
    */
    public function _remove(&$array, $key, $value){
        foreach($array as $subKey => $subArray){
            if($subArray[$key] == $value){
                unset($array[$subKey]);
            }
        }
        return true;
    }

}