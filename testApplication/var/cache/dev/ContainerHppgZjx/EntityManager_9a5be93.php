<?php

namespace ContainerHppgZjx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39463 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer02948 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties551c9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getConnection', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getMetadataFactory', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getExpressionBuilder', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'beginTransaction', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getCache', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getCache();
    }

    public function transactional($func)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'transactional', array('func' => $func), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->transactional($func);
    }

    public function commit()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'commit', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->commit();
    }

    public function rollback()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'rollback', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getClassMetadata', array('className' => $className), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'createQuery', array('dql' => $dql), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'createNamedQuery', array('name' => $name), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'createQueryBuilder', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'flush', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'clear', array('entityName' => $entityName), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->clear($entityName);
    }

    public function close()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'close', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->close();
    }

    public function persist($entity)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'persist', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'remove', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'refresh', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'detach', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'merge', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getRepository', array('entityName' => $entityName), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'contains', array('entity' => $entity), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getEventManager', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getConfiguration', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'isOpen', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getUnitOfWork', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getProxyFactory', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'initializeObject', array('obj' => $obj), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'getFilters', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'isFiltersStateClean', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'hasFilters', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return $this->valueHolder39463->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer02948 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder39463) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39463 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder39463->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, '__get', ['name' => $name], $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        if (isset(self::$publicProperties551c9[$name])) {
            return $this->valueHolder39463->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39463;

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

        $targetObject = $this->valueHolder39463;
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
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39463;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39463;
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
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, '__isset', array('name' => $name), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39463;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39463;
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
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, '__unset', array('name' => $name), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39463;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39463;
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
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, '__clone', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        $this->valueHolder39463 = clone $this->valueHolder39463;
    }

    public function __sleep()
    {
        $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, '__sleep', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;

        return array('valueHolder39463');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer02948 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer02948;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer02948 && ($this->initializer02948->__invoke($valueHolder39463, $this, 'initializeProxy', array(), $this->initializer02948) || 1) && $this->valueHolder39463 = $valueHolder39463;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39463;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39463;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
