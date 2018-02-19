<?php
namespace O10n;

/**
 * Global functions
 *
 * @package    optimization
 * @subpackage optimization/controllers
 * @author     o10n-x <info@optimization.team>
 */

// return optimization controller
function get($controller)
{
    return Core::get($controller);
}

// Add search replace filter
function search_replace($search, $replace, $regex = false)
{
    Core::get('output')->add_search_replace($search, $replace, $regex);
}


// load cron related methods
require O10N_CORE_PATH . 'includes/cron.inc.php';