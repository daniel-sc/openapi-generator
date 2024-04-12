<?php

/**
 * OpenAPI Petstore
 * PHP version 8.x
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

namespace OpenAPIServer\Api;


abstract class AbstractStoreApi
{

    /**
     * Operation deleteOrder
     *
     * Delete purchase order by ID
     *
     * @param string $orderId ID of the order that needs to be deleted (required)
     *
     * @return void
     */
    public function deleteOrder(string $orderId): void
    {
        throw new \Exception('Not implemented');
    }

    /**
     * Operation getInventory
     *
     * Returns pet inventories by status
     *
     *
     * @return void
     */
    public function getInventory(): void
    {
        throw new \Exception('Not implemented');
    }

    /**
     * Operation getInventory (stream)
     *
     * Returns pet inventories by status
     *
     *
     */
    public function getInventoryStream(): void
    {
        throw new \Exception('Not implemented');
    }
    /**
     * Operation getOrderById
     *
     * Find purchase order by ID
     *
     * @param int $orderId ID of pet that needs to be fetched (required)
     *
     * @return \OpenAPIServer\Model\Order|null
     */
    public function getOrderById(int $orderId): \OpenAPIServer\Model\Order|null
    {
        throw new \Exception('Not implemented');
    }

    /**
     * Operation placeOrder
     *
     * Place an order for a pet
     *
     * @param \OpenAPIServer\Model\Order $order order placed for purchasing the pet (required)
     *
     * @return \OpenAPIServer\Model\Order|null
     */
    public function placeOrder(\OpenAPIServer\Model\Order $order): \OpenAPIServer\Model\Order|null
    {
        throw new \Exception('Not implemented');
    }

}
