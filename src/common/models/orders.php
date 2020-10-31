<?php

namespace payments\common\models;

use data\model\model;

class orders extends model
{
    public $table = 'orders';
    public $key   = 'order_id';
    public $dicionary = "SELECT order_id as value, created FROM orders;";

    /**
     * Evento construtor da classe
     */
    public function __construct()
    {
        parent::__construct($this->visibleColumns()['table'], $this->visibleColumns()['key']);
    }

    /**
     * Informações das colunas visíveis
     *
     * @return void
     */
    public function visibleColumns()
    {
        return array(
            'table'   => 'orders',
            'key'     => 'order_id',
            'columns' => array(
                'order_id' => array(
                    'label' => 'Id',
                    'pk'    => true,
                    'type'  => 'integer',
                    'limit' => 11,
                ),
                'status' => array(
                    'label' => 'Status',
                    'pk'    => false,
                    'type'  => 'varchar',
                    'limit' => 255,
                ),
                'total_mount' => array(
                    'label' => 'Valor Total',
                    'pk'    => false,
                    'type'  => 'integer',
                    'limit' => 12,
                )
            ),
        );
    }
}
?>