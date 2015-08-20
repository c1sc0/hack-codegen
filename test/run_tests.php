<?hh
/**
 * Copyright (c) 2015-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

namespace Facebook\HackCodegen;

require_once('vendor/autoload.php');
require_once('CodegenSimpleTester.php');
$success = CodegenSimpleTester::run();
exit($success ? 0 : 1);
