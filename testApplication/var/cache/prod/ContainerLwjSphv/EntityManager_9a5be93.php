<?php

namespace ContainerLwjSphv;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder861b0 = null;
    private $initializer43046 = null;
    private static $publicProperties3254a = [
        
    ];
    public function getConnection()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getConnection', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getMetadataFactory', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getExpressionBuilder', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'beginTransaction', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getCache', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getCache();
    }
    public function transactional($func)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'transactional', array('func' => $func), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->transactional($func);
    }
    public function commit()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'commit', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->commit();
    }
    public function rollback()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'rollback', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getClassMetadata', array('className' => $className), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'createQuery', array('dql' => $dql), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'createNamedQuery', array('name' => $name), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'createQueryBuilder', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'flush', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'clear', array('entityName' => $entityName), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->clear($entityName);
    }
    public function close()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'close', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->close();
    }
    public function persist($entity)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'persist', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'remove', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'refresh', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'detach', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'merge', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'contains', array('entity' => $entity), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getEventManager', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getConfiguration', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'isOpen', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getUnitOfWork', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getProxyFactory', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'initializeObject', array('obj' => $obj), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'getFilters', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'isFiltersStateClean', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'hasFilters', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return $this->valueHolder861b0->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer43046 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder861b0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder861b0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder861b0->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, '__get', ['name' => $name], $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        if (isset(self::$publicProperties3254a[$name])) {
            return $this->valueHolder861b0->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder861b0;
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
        $targetObject = $this->valueHolder861b0;
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
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder861b0;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder861b0;
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
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, '__isset', array('name' => $name), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder861b0;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder861b0;
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
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, '__unset', array('name' => $name), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder861b0;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder861b0;
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
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, '__clone', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        $this->valueHolder861b0 = clone $this->valueHolder861b0;
    }
    public function __sleep()
    {
        $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, '__sleep', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
        return array('valueHolder861b0');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43046 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43046;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer43046 && ($this->initializer43046->__invoke($valueHolder861b0, $this, 'initializeProxy', array(), $this->initializer43046) || 1) && $this->valueHolder861b0 = $valueHolder861b0;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder861b0;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder861b0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
