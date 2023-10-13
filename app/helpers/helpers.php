<?php

use Illuminate\Support\Arr;

if (!function_exists('renderDepartmentHtml')) {
    function renderDepartmentHtml(array $departments, $parentKey = null): string
    {
        $html = '';
        $prefix = $parentKey ? $parentKey . '.' : '';
        foreach ($departments as $key => $item) {
            $html .= "<p style='padding-left:" . ($item['depth'] * 2) . "em'>" . $prefix . ($key + 1) . ". " . $item['name'] . '</p>';
            $html .= renderDepartmentHtml($item['children'] ?? [], $prefix . ($key + 1));
        }
        return $html;
    }
}

if (!function_exists('renderDepartmenttoArray')) {
    function renderDepartmenttoArray(array $departments, $parentKey = null): array
    {
        $result = array();
        $prefix = $parentKey ? $parentKey . '.' : '';
        foreach ($departments as $key => $item) {
            array_push($result, ["content" => "<p style='padding-left:" . ($item['depth'] * 2) . "em'>" . $prefix . ($key + 1) . ". " . $item['name'] . "</p>", "id" => $item["id"]]);
            $result = array_merge($result, renderDepartmenttoArray($item['children'] ?? [], $prefix . ($key + 1)));
        }
        return $result;
    }
}
