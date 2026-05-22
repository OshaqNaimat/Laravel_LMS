<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'database_name',
        'connection_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relationships
    public function users()
    {
        return $this->hasMany(TenantUser::class);
    }

    public function admin()
    {
        return $this->hasOne(TenantUser::class)->where('role', 'admin');
    }

    public function activeUsers()
    {
        return $this->users()->where('is_active', true);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'Active');
    }

    public function scopeBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    // Helper Methods
    public function isActive()
    {
        return $this->status === 'Active';
    }

    public function getTenantAdminEmail()
    {
        return $this->admin()?->email ?? 'N/A';
    }

    public function getTenantAdminName()
    {
        return $this->admin()?->name ?? 'N/A';
    }

    public function getUserCount()
    {
        return $this->users()->count();
    }

    public function getActiveUserCount()
    {
        return $this->activeUsers()->count();
    }
}
