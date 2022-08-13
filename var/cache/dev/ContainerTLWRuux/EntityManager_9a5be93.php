<?php

namespace ContainerTLWRuux;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder459d2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e0d2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd179c = [
        
    ];

    public function getConnection()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getConnection', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getMetadataFactory', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getExpressionBuilder', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'beginTransaction', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getCache', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'transactional', array('func' => $func), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'commit', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->commit();
    }

    public function rollback()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'rollback', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getClassMetadata', array('className' => $className), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'createQuery', array('dql' => $dql), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'createNamedQuery', array('name' => $name), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'createQueryBuilder', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'flush', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'clear', array('entityName' => $entityName), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->clear($entityName);
    }

    public function close()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'close', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->close();
    }

    public function persist($entity)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'persist', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'remove', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'refresh', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'detach', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'merge', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'contains', array('entity' => $entity), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getEventManager', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getConfiguration', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'isOpen', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getUnitOfWork', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getProxyFactory', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'initializeObject', array('obj' => $obj), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'getFilters', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'isFiltersStateClean', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'hasFilters', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return $this->valueHolder459d2->hasFilters();
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

        $instance->initializer7e0d2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder459d2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder459d2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder459d2->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, '__get', ['name' => $name], $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        if (isset(self::$publicPropertiesd179c[$name])) {
            return $this->valueHolder459d2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder459d2;

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

        $targetObject = $this->valueHolder459d2;
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
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder459d2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder459d2;
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
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, '__isset', array('name' => $name), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder459d2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder459d2;
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
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, '__unset', array('name' => $name), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder459d2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder459d2;
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
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, '__clone', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        $this->valueHolder459d2 = clone $this->valueHolder459d2;
    }

    public function __sleep()
    {
        $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, '__sleep', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;

        return array('valueHolder459d2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7e0d2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7e0d2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e0d2 && ($this->initializer7e0d2->__invoke($valueHolder459d2, $this, 'initializeProxy', array(), $this->initializer7e0d2) || 1) && $this->valueHolder459d2 = $valueHolder459d2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder459d2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder459d2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
