<?php

namespace App\Helpers;

class ActionButtonHelper
{
    /**
     * Generate standard CRUD action buttons
     */
   public static function crudActions($model, $routePrefix = null, $config = [])
    {
        $routePrefix = $routePrefix ?? 'dashboard.' . strtolower(class_basename($model)) . 's';
        
        // Default configuration
        $defaultConfig = [
            'show' => true,
            'edit' => true,
            'delete' => true,
            'duplicate' => false,
            'archive' => false,
            'restore' => false,
            'export' => false,
            'print' => false
        ];
        
        // Merge with provided config
        $config = array_merge($defaultConfig, $config);
        
        $actions = [];
        
        // Show/View Action
        if ($config['show']) {
            $actions[] = [
                'type' => 'link',
                'text' => '',
                'icon' => 'ti ti-eye',
                'color' => 'info',
                'tooltip' => 'View',
                'url' => route($routePrefix . '.show', $model->id),
                'class' => 'view-btn'
            ];
        }
        
        // Edit Action
        if ($config['edit']) {
            $actions[] = [
                'type' => 'link',
                'text' => '',
                'icon' => 'ti ti-edit',
                'color' => 'primary',
                'tooltip' => 'Edit',
                'url' => route($routePrefix . '.edit', $model->id),
                'class' => 'edit-btn'
            ];
        }
        
        // Duplicate Action
        if ($config['duplicate']) {
            $actions[] = [
                'type' => 'link',
                'text' => '',
                'icon' => 'ti ti-copy',
                'color' => 'success',
                'tooltip' => 'Duplicate',
                'url' => route($routePrefix . '.duplicate', $model->id),
                'class' => 'duplicate-btn'
            ];
        }
        
        // Export Action
        if ($config['export']) {
            $actions[] = [
                'type' => 'link',
                'text' => '',
                'icon' => 'ti ti-download',
                'color' => 'secondary',
                'tooltip' => 'Export',
                'url' => route($routePrefix . '.export', $model->id),
                'class' => 'export-btn',
                'attributes' => ['target' => '_blank']
            ];
        }
        
        // Archive Action (for soft deletes)
        if ($config['archive']) {
            $actions[] = [
                'type' => 'button',
                'text' => '',
                'icon' => 'ti ti-archive',
                'color' => 'warning',
                'tooltip' => 'Archive',
                'class' => 'archive-btn',
                'onclick' => "archiveItem({$model->id})",
                'attributes' => [
                    'data-id' => $model->id
                ]
            ];
        }
        
        // Restore Action (for archived items)
        if ($config['restore']) {
            $actions[] = [
                'type' => 'button',
                'text' => '',
                'icon' => 'ti ti-refresh',
                'color' => 'success',
                'tooltip' => 'Restore',
                'class' => 'restore-btn',
                'onclick' => "restoreItem({$model->id})",
                'attributes' => [
                    'data-id' => $model->id
                ]
            ];
        }
        
        // Delete Action
        if ($config['delete']) {
            $actions[] = [
                'type' => 'button',
                'text' => '',
                'icon' => 'ti ti-trash',
                'color' => 'danger',
                'tooltip' => 'Delete',
                'class' => 'delete-btn',
                'data-href' => route($routePrefix . '.destroy', $model->id),
                'attributes' => [
                    'data-confirm' => 'Are you sure you want to delete this item?'
                ]
            ];
        }

        //Print pdf action
        if ($config['print']) {
            $actions[] = [
                'type' => 'link',
                'text' => '',
                'icon' => 'ti ti-printer',
                'color' => 'info',
                'tooltip' => 'Print',
                'class' => 'print-btn',
                'url' => route($routePrefix . '.print', $model->id),
                'attributes' => ['target' => '_blank']
            ];
        }
        
        return $actions;
    }

    /**
     * Generate custom action buttons
     */
    public static function customActions($model, $actions = [])
    {
        $result = [];
        
        foreach ($actions as $action) {
            $result[] = [
                'type' => $action['type'] ?? 'button',
                'text' => $action['text'] ?? '',
                'icon' => $action['icon'] ?? '',
                'color' => $action['color'] ?? 'secondary',
                'tooltip' => $action['tooltip'] ?? $action['text'] ?? '',
                'url' => isset($action['route']) ? route($action['route'], $model->id) : ($action['url'] ?? '#'),
                'class' => $action['class'] ?? '',
                'onclick' => $action['onclick'] ?? null,
                'data-href' => isset($action['delete_route']) ? route($action['delete_route'], $model->id) : null,
                'attributes' => $action['attributes'] ?? []
            ];
        }
        
        return $result;
    }

    /**
     * Generate item-specific actions
     */
    

    /**
     * Generate status toggle actions
     */
    public static function statusActions($model, $currentStatus = 'active')
    {
        $actions = [];
        
        if ($currentStatus === 'active') {
            $actions[] = [
                'type' => 'button',
                'icon' => 'ti ti-player-pause',
                'color' => 'warning',
                'tooltip' => 'Deactivate',
                'class' => 'status-toggle-btn',
                'onclick' => "toggleStatus({$model->id}, 'inactive')"
            ];
        } else {
            $actions[] = [
                'type' => 'button',
                'icon' => 'ti ti-player-play',
                'color' => 'success',
                'tooltip' => 'Activate',
                'class' => 'status-toggle-btn',
                'onclick' => "toggleStatus({$model->id}, 'active')"
            ];
        }
        
        return $actions;
    }
}