<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder12ba4 = null;
    private $initializer5d23e = null;
    private static $publicPropertiesfc0ea = [
        
    ];
    public function getConnection()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getConnection', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getMetadataFactory', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getExpressionBuilder', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'beginTransaction', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getCache', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'transactional', array('func' => $func), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'commit', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->commit();
    }
    public function rollback()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'rollback', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getClassMetadata', array('className' => $className), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'createQuery', array('dql' => $dql), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'createNamedQuery', array('name' => $name), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'createQueryBuilder', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'flush', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'clear', array('entityName' => $entityName), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->clear($entityName);
    }
    public function close()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'close', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->close();
    }
    public function persist($entity)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'persist', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'remove', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'refresh', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'detach', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'merge', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'contains', array('entity' => $entity), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getEventManager', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getConfiguration', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'isOpen', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getUnitOfWork', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getProxyFactory', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'initializeObject', array('obj' => $obj), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'getFilters', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'isFiltersStateClean', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'hasFilters', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return $this->valueHolder12ba4->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5d23e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder12ba4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder12ba4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder12ba4->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, '__get', ['name' => $name], $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        if (isset(self::$publicPropertiesfc0ea[$name])) {
            return $this->valueHolder12ba4->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12ba4;
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
        $targetObject = $this->valueHolder12ba4;
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
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12ba4;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder12ba4;
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
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, '__isset', array('name' => $name), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12ba4;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder12ba4;
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
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, '__unset', array('name' => $name), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12ba4;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder12ba4;
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
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, '__clone', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        $this->valueHolder12ba4 = clone $this->valueHolder12ba4;
    }
    public function __sleep()
    {
        $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, '__sleep', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
        return array('valueHolder12ba4');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5d23e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5d23e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5d23e && ($this->initializer5d23e->__invoke($valueHolder12ba4, $this, 'initializeProxy', array(), $this->initializer5d23e) || 1) && $this->valueHolder12ba4 = $valueHolder12ba4;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12ba4;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12ba4;
    }
}
