<?php

/**
 * Copyright 2018 Matthias Kesler
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
$lang = "de-de";
if (isset($_GET['lang'])) {
    $lang = filter_var($_GET['lang'], FILTER_SANITIZE_STRING);
}
$lang_file = dirname(__FILE__) . "/lang/lang." . $lang . ".php";
if (!file_exists($lang_file)) {
    error_log("Translation for " . $lang . " not found. Fallback to 'de-de'");
    $lang = "de-de";
}
require_once($lang_file);
unset($lang_file);
?>