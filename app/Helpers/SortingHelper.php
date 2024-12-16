<?php
// app/Helpers/SortingHelper.php
namespace App\Helpers;

class SortingHelper
{
    /**
     * Get the sorting options from the request, with validation.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $defaultSort The default column to sort by if not provided.
     * @param string $defaultDirection The default sort direction if not provided.
     * @return array An array with the sorting column and direction.
     */
    public static function getSortingOptions($request, $defaultSort = 'price', $defaultDirection = 'asc')
    {
        // List of allowed sorting columns
        $allowedSorts = ['name', 'price', 'created_at'];

        // List of allowed sort directions
        $allowedDirections = ['asc', 'desc'];

        // Get sort parameters from the request
        $sortBy = $request->query('sort_by', $defaultSort);
        $sortDirection = $request->query('sort_direction', $defaultDirection);

        // Validate and sanitize the sort column
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : $defaultSort;

        // Validate and sanitize the sort direction
        $sortDirection = in_array($sortDirection, $allowedDirections) ? $sortDirection : $defaultDirection;

        return [$sortBy, $sortDirection];
    }
}











