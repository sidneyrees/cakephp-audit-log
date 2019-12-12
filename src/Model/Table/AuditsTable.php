<?php

namespace AuditLog\Model\Table;

use Cake\ORM\Table;

/**
 * Audits Model
 *
 * @property \AuditLog\Model\Table\AuditDeltasTable $AuditDeltas
 *
 * @method \AuditLog\Model\Entity\Audit get($primaryKey, $options = [])
 * @method \AuditLog\Model\Entity\Audit newEntity($data = null, array $options = [])
 * @method \AuditLog\Model\Entity\Audit[] newEntities(array $data, array $options = [])
 * @method \AuditLog\Model\Entity\Audit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \AuditLog\Model\Entity\Audit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \AuditLog\Model\Entity\Audit[] patchEntities($entities, array $data, array $options = [])
 * @method \AuditLog\Model\Entity\Audit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AuditsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('audits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AuditDeltas', [
            'foreignKey' => 'audit_id',
            'className' => 'AuditLog.AuditDeltas',
        ]);
    }
}
