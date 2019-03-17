<?php
//Панель управления
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Панель управления', route('dashboard'));
});

// Панель управления > [ Страница ]
Breadcrumbs::for('page', function ($trail, $page) {
    $trail->parent('dashboard');
    if (isset($page['id'])){
        $trail->push($page['name'], route($page['route'] . '.' . $page['action'],$page['id']));
    }else{
        $trail->push($page['name'], route($page['route'] . '.' . $page['action']));
    }

});

// Панель управления > [ Страница ] > [ Действие ]
Breadcrumbs::for('action', function ($trail, $action) {
    $action_name = $action['action'];
    if ($action['default'] != $action['action']) {
        $trail->parent('page', $action);
    } else {
        $action['action'] = $action_name;
        $trail->parent('page', $action);
    }
    $trail->push(ucfirst($action['action']), route($action['route'] . '.' . $action['action'], $action['id']));
});
