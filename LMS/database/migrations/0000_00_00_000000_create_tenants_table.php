<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create tenants table
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('status')->default('Active'); // Active, Inactive, Suspended
            $table->string('database_name')->nullable();
            $table->string('connection_name')->default('tenant_db');
            $table->timestamps();

            $table->index('slug');
            $table->index('status');
        });

        // Create tenant_users table
        Schema::create('tenant_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'teacher', 'student', 'parent'])->default('student');
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_login_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Indexes
            $table->index('tenant_id');
            $table->index('email');
            $table->index('role');
            $table->index('is_active');
            $table->unique(['tenant_id', 'email']);
        });

        // Create roles table
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create permissions table
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create tenant_user_roles pivot table
        Schema::create('tenant_user_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tenant_users')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['user_id', 'role_id']);
        });

        // Create tenant_user_permissions pivot table
        Schema::create('tenant_user_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tenant_users')->onDelete('cascade');
            $table->foreignId('permission_id')->constrained('permissions')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['user_id', 'permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_user_permissions');
        Schema::dropIfExists('tenant_user_roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('tenant_users');
        Schema::dropIfExists('tenants');
    }
};
