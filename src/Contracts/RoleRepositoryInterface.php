<?php

namespace SujanSht\AdminMaster\Contracts;

use SujanSht\AdminMaster\Http\Requests\RoleRequest;
use SujanSht\AdminMaster\Models\Admin\Role;

interface RoleRepositoryInterface
{
    public function indexRole();

    public function createRole();

    public function storeRole(RoleRequest $request);

    public function showRole(Role $role);

    public function editRole(Role $role);

    public function updateRole(RoleRequest $request, Role $role);

    public function destroyRole(Role $role);
}
