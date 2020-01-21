<?php

/**
 * This file is the routing root for the endpoints.
 */

namespace MidPay;

include('../lib.php');

var_dump(Params::url());
var_dump(Params::headers());
var_dump(Params::body());
var_dump(Params::method());
var_dump(Params::client());
