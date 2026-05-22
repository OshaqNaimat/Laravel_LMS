<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TenantUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tenant_users';

    protected $fillable = [
        'tenant_id',
        'name',
        'email',
        'password',
        'role',
        'is_active',
        'last_login_at',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    // Relationships
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeAdmins($query)
    {
        return $query->where('role', 'admin');
    }

    public function scopeByTenant($query, $tenantId)
    {
        return $query->where('tenant_id', $tenantId);
    }

    public function scopeByEmail($query, $email)
    {
        return $query->where('email', $email);
    }

    // Helper Methods
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isActive()
    {
        return $this->is_active === true;
    }

    public function updateLastLogin()
    {
        $this->update(['last_login_at' => now()]);
    }

    public function canAccess(Tenant $tenant)
    {
        return $this->tenant_id === $tenant->id && $this->isActive();
    }
}
