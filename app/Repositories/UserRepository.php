<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRepository
 *
 * This class implements the ClientInterface and provides methods for CRUD operations related to clients.
 */
class UserRepository implements UserInterface
{
    /**
     * The model instance.
     *
     * @var Model
     */
    protected $model;

    /**
     * Create a new UserRepository instance.
     *
     * @param Model $model The model instance to be used.
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get a client based on ID.
     *
     * @param string $id The ID of the client to retrieve.
     * @return User|null The found client or null if not found.
     */
    public function get(string $id): ?User
    {
        return $this->model->find($id);
    }

    public function getByUser(string $user): ?User
    {
        return $this->model->where('user', $user)->first();
    }

    /**
     * Find a client based on ID.
     *
     * @param string $id The ID of the client to be found.
     * @return User|null The found client or null if not found.
     */
    public function find(string $id): ?User
    {
        return $this->model->find($id);
    }

    /**
     * Create a new client.
     *
     * @param User $client The client model instance to be created.
     * @return User The created client model.
     */
    public function create(User $client): User
    {
        $this->model->create($client->toArray());
        return $client;
    }

    /**
     * Update an existing client based on ID.
     *
     * @param User $client The updated client model instance.
     * @param string $id The ID of the client to be updated.
     * @return User|null The updated client model or null if not found.
     */
    public function update(array $client, string $id): bool
    {
        $existingClient = $this->model->find($id);

        if ($existingClient) {
            $result = $existingClient->update((array)$client);
            return $result ? true : false;
        }

        return false;
    }

    /**
     * Delete a client based on ID.
     *
     * @param string $id The ID of the client to be deleted.
     * @return bool True if deletion was successful, false otherwise.
     */
    public function delete(string $id): bool
    {
        $client = $this->model->find($id);

        if ($client) {
            return $client->delete();
        }

        return false;
    }

    public function verifyOldPassword(string $oldPassword, int $userId): bool
    {
        $client = $this->model->find($userId);
        $verify = password_verify($oldPassword, $client->password);

        return $verify ? true : false;
    }
}
