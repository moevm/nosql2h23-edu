<?php

declare(strict_types=1);

use App\Edu\Roles\Enums\AvailableRoles;
use App\Edu\Roles\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $availableRoleTitles = getEnumValues(AvailableRoles::class);

        foreach ($availableRoleTitles as $availableRoleTitle) {
            $role = new Role();

            $role->title = $availableRoleTitle;
            $role->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists(Role::COLLECTION_NAME);
    }
};
