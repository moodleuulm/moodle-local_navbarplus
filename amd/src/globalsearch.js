// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local navbarplus - JS code for modifying the global search in the navbar.
 *
 * @package    local_navbarplus
 * @copyright  2017 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery'], function($) {
    "use strict";

    /**
     * Hides the Moodle core search field.
     *
     * @method findCoreSearchFieldAndHide
     */
    function findCoreSearchFieldAndHide() {
        // Get the id of the Moodle core search form wrapper.
        var globalsearchformid = $('.hidden-md-down .search-input-wrapper.nav-link').attr('id');
        // Get the unique element by id.
        var globalsearchformwrapper = $('#' + globalsearchformid);
        // Hide the element.
        globalsearchformwrapper.css('display', 'none');
    }

    /**
     * Adds a global search field suitable for large screens.
     * We do this as we want to modify the position and the click handler in comparison to Moodle core.
     *
     * @method addSearchFieldForLargeScreens
     */
    function addSearchFieldForLargeScreens() {
        // Add a div that's only shown on large screens and insert it within the navbar after the custom search icon.
        $('<div class="search-on-large-screens hidden-lg-down"></div>').insertAfter('.localnavbarplus.nav-link.search');
        var searchonlagescreens = $('.search-on-large-screens');
        // Append the search-input-wrapper to it.
        searchonlagescreens.append('<div class="search-input-wrapper nav-link expanded"></div>');
        // Search for the already existing form field, clone it, insert this into the wrapper div and set it to expanded.
        $('.hidden-md-down .search-input-form').clone()
            .appendTo('.search-on-large-screens .search-input-wrapper').addClass('expanded');
        // Initially hide the form.
        searchonlagescreens.hide();
    }

    /**
     * Adds a global search field suitable for small screens.
     *
     * @method addSearchFieldForSmallScreens
     */
    function addSearchFieldForSmallScreens() {
        // Add a div that's only shown on smaller screens as a sibling in the navbar.
        $('#page-wrapper > header').append('<div class="container-fluid navbar-nav search-on-small-screens hidden-lg-up"></div>');
        var searchonsmallscreens = $('.search-on-small-screens');
        // Append the search-input-wrapper to it.
        searchonsmallscreens.append('<div class="search-input-wrapper nav-link expanded"></div>');
        // Search for the already existing form field, clone it, insert this into the wrapper div and set it to expanded.
        $('.hidden-md-down .search-input-form').clone()
            .appendTo('.search-on-small-screens .search-input-wrapper').addClass('expanded');
        // Initially hide the form.
        searchonsmallscreens.hide();
    }

    /**
     * Toggles the form.
     *
     * @method toggleSearchField
     */
    function toggleSearchField() {
        $('#localnavbarplus-search').on('click', function(e) {
            // Prevent the call from the assigned link url. This url is just a fallback for non-js.
            e.preventDefault();
            // Toggling the visibility of the search field depending on it's current state.
            if ($('.search-on-small-screens').is(':visible') || ($('.search-on-large-screens').is(':visible'))) {
                $('.search-on-small-screens').hide();
                $('.search-on-large-screens').hide();
            } else {
                $('.search-on-small-screens').show();
                $('.search-on-large-screens').show();
            }
        });
    }

    /**
     * Initialising
     *
     * @method initGlobalSearchModification
     */
    function initGlobalSearchModification() {
        findCoreSearchFieldAndHide();
        addSearchFieldForLargeScreens();
        addSearchFieldForSmallScreens();
        toggleSearchField();
    }

    return {
        /**
         * Add own gloabl search fields to assign only a click handler and provide a solution for small screens
         *
         * @method init
         */
        init: function() {
            initGlobalSearchModification();
        }
    };
});
