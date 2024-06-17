<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

/**
 * Interface ClientInterface
 *
 * This interface defines methods for CRUD operations related to clients.
 */
interface UserInterface
{
    /**
     * Get a client based on ID.
     *
     * @param string $id The ID of the client to retrieve.
     * @return User The found client.
     */
    public function get(string $id): ?User;

    public function getByUser(string $user): ?User;

    /**
     * Create a new client.
     *
     * @param User $client The object containing the data of the client to be created.
     * @return User The newly created client.
     */
    public function create(User $client): User;

    /**
     * Update an existing client based on ID.
     *
     * @param User $client The object containing the new data of the client.
     * @param string $id The ID of the client to be updated.
     * @return User The updated client.
     */
    public function update(array $client, string $id): bool;

    /**
     * Delete a client based on ID.
     *
     * @param string $id The ID of the client to be deleted.
     * @return bool
     */
    public function delete(string $id): bool;

    /**
     * Find a client based on ID.
     *
     * @param string $id The ID of the client to be found.
     * @return User|null The found client or null if not found.
     */
    public function find(string $id): ?User;
}
