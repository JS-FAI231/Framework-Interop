<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7bb2f = null;
    private $initializer93bf8 = null;
    private static $publicProperties6b092 = [
        
    ];
    public function getConnection()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getConnection', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getMetadataFactory', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getExpressionBuilder', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'beginTransaction', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getCache', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'transactional', array('func' => $func), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'commit', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->commit();
    }
    public function rollback()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'rollback', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getClassMetadata', array('className' => $className), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'createQuery', array('dql' => $dql), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'createNamedQuery', array('name' => $name), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'createQueryBuilder', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'flush', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'clear', array('entityName' => $entityName), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->clear($entityName);
    }
    public function close()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'close', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->close();
    }
    public function persist($entity)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'persist', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'remove', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'refresh', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'detach', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'merge', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'contains', array('entity' => $entity), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getEventManager', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getConfiguration', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'isOpen', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getUnitOfWork', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getProxyFactory', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'initializeObject', array('obj' => $obj), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'getFilters', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'isFiltersStateClean', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'hasFilters', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return $this->valueHolder7bb2f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer93bf8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7bb2f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7bb2f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7bb2f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, '__get', ['name' => $name], $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        if (isset(self::$publicProperties6b092[$name])) {
            return $this->valueHolder7bb2f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bb2f;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7bb2f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bb2f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7bb2f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, '__isset', array('name' => $name), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bb2f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7bb2f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, '__unset', array('name' => $name), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bb2f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7bb2f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, '__clone', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        $this->valueHolder7bb2f = clone $this->valueHolder7bb2f;
    }
    public function __sleep()
    {
        $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, '__sleep', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
        return array('valueHolder7bb2f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93bf8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93bf8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer93bf8 && ($this->initializer93bf8->__invoke($valueHolder7bb2f, $this, 'initializeProxy', array(), $this->initializer93bf8) || 1) && $this->valueHolder7bb2f = $valueHolder7bb2f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7bb2f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7bb2f;
    }
}
